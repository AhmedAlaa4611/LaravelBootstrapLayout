<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    /**
     * Determine whether the user can handle the model.
     */
    public function handle(User $user, Book $book): bool
    {
        return $book->user()->is($user);
    }
}
