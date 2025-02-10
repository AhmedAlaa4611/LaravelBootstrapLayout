<?php

namespace App\Http\Requests\Base;

trait DescriptionRules
{
    public function descriptionRules()
    {
        return [
            'description' => ['required', 'string', 'max:65,535'],
        ];
    }
}
