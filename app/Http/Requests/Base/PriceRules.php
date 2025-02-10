<?php

namespace App\Http\Requests\Base;

trait PriceRules
{
    public function priceRules()
    {
        return [
            'price' => ['required', 'decimal:1,2'],
        ];
    }
}
