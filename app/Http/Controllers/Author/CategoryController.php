<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Auth::user()
            ->categories()
            ->get();

        $display = [
            'id',
            'title',
            'created_at',
        ];

        return view('authors.categories.index', compact('categories', 'display'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();

        $category = Auth::user()
            ->categories()
            ->create($data);

        return to_route('categories.show', $category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('authors.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('authors.categories.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        $category->update($data);

        return to_route('categories.show', $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return to_route('categories.index');
    }
}
