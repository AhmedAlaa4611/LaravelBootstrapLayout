<?php

namespace App\Http\Requests\Book;

use App\Http\Requests\Base\CategoryIdRules;
use App\Http\Requests\Base\DescriptionRules;
use App\Http\Requests\Base\ImageRules;
use App\Http\Requests\Base\PriceRules;
use App\Http\Requests\Base\TitleRules;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    use CategoryIdRules, DescriptionRules, ImageRules, PriceRules, TitleRules;

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return array_merge(
            $this->titleRules(),
            $this->priceRules(),
            $this->descriptionRules(),
            $this->imageRules(),
            $this->categoryIdRules(),
        );
    }
}
