<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Traits\Imageable;

class BookController extends Controller
{
    use Imageable;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        $display = [
            'id',
            'title',
            'description',
            'price',
            'created_at',
        ];

        return view('books.index', compact('books', 'display'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->validated();

        $data['image'] = $this->uploadImage('books');

        $book = Book::create($data);

        return to_route('books.show', $book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::all();

        return view('books.update', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $this->deleteImage($book->image);
            $data['image'] = $this->uploadImage('books');
        }

        $book->update($data);

        return to_route('books.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $this->deleteImage($book->image);

        $book->delete();

        return to_route('books.index');
    }
}
