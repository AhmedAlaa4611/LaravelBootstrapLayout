<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = ['author', 'student'];

        return view('register', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255', 'confirmed'],
            'password_confirmation' => ['required', 'min:6', 'max:255'],
            'role' => ['required', Rule::in(['author', 'student'])],
        ]);

        $user = User::create($data);

        Auth::login($user);

        return redirect('/');
    }
}
