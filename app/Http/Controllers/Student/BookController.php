<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('students.books.index', compact('books'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('students.books.show', compact('book'));
    }
}
