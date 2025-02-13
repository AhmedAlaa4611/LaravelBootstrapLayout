<?php

namespace App\Http\Requests\Base;

trait CategoryIdRules
{
    public function categoryIdRules()
    {
        return [
            'category_id' => ['required', 'integer', 'min:1', 'exists:categories,id'],
        ];
    }
}
