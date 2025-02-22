<?php

use App\Http\Middleware\EnsureUserIsAuthor;
use App\Http\Middleware\EnsureUserIsStudent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {

    Route::controller(App\Http\Controllers\Auth\RegisterController::class)->group(function () {
        Route::get('/register', 'create')->name('register.create');
        Route::post('/register', 'store')->name('register.store');
    });

    Route::controller(App\Http\Controllers\Auth\LoginController::class)->group(function () {
        Route::get('/login', 'create')->name('login.create');
        Route::post('/login', 'store')->name('login.store');
    });

});

Route::middleware('auth')->group(function () {

    Route::middleware(EnsureUserIsAuthor::class)->group(function () {

        Route::controller(App\Http\Controllers\Author\CategoryController::class)->group(function () {
            Route::get('/categories/create', 'create')->name('categories.create');
            Route::post('/categories', 'store')->name('categories.store');
            Route::get('/categories', 'index')->name('categories.index');
            Route::get('/categories/{category}', 'show')->name('categories.show')->can('handle', 'category');
            Route::get('/categories/{category}/edit', 'edit')->name('categories.edit')->can('handle', 'category');
            Route::put('/categories/{category}', 'update')->name('categories.update')->can('handle', 'category');
            Route::delete('/categories/{category}', 'destroy')->name('categories.destroy')->can('handle', 'category');
        });

        Route::controller(App\Http\Controllers\Author\BookController::class)->group(function () {
            Route::get('/books/create', 'create')->name('books.create');
            Route::post('/books', 'store')->name('books.store');
            Route::get('/books', 'index')->name('books.index');
            Route::get('/books/{book}', 'show')->name('books.show')->can('handle', 'book');
            Route::get('/books/{book}/edit', 'edit')->name('books.edit')->can('handle', 'book');
            Route::put('/books/{book}', 'update')->name('books.update')->can('handle', 'book');
            Route::delete('/books/{book}', 'destroy')->name('books.destroy')->can('handle', 'book');
        });

    });

    Route::middleware(EnsureUserIsStudent::class)->group(function () {

        Route::controller(App\Http\Controllers\Student\CategoryController::class)->group(function () {
            Route::get('/students/categories', 'index');
            Route::get('/students/categories/{category}', 'show');
        });

        Route::controller(App\Http\Controllers\Student\BookController::class)->group(function () {
            Route::get('/students/books', 'index');
            Route::get('/students/books/{book}', 'show');
        });

    });

    Route::controller(App\Http\Controllers\Auth\AuthController::class)->group(function () {
        Route::delete('/logout', 'destroy')->name('logout');
    });

});
