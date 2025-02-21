<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;

class CategoryPolicy
{
    /**
     * Determine whether the user can handle the model.
     */
    public function handle(User $user, Category $category): bool
    {
        return $category->user()->is($user);
    }
}
