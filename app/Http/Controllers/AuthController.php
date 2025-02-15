<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return to_route('register.create');
    }
}
