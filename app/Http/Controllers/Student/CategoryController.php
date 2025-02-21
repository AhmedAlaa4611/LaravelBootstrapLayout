<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('students.categories.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('students.categories.show', compact('category'));
    }
}
