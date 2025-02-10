<?php

namespace App\Http\Requests\Base;

trait ImageRules
{
    public function imageRules($required = true)
    {
        $rules = ['image', 'extensions:jpg,jpeg,png,bmp', 'mimes:jpg,jpeg,png,bmp'];

        if ($required) {
            array_unshift($rules, 'required');
        }

        return [
            'image' => $rules,
        ];
    }
}
