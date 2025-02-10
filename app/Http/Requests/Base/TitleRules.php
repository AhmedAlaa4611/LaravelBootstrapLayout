<?php

namespace App\Http\Requests\Base;

trait TitleRules
{
    public function titleRules()
    {
        return [
            'title' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/', 'max:255'],
        ];
    }
}
