<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\Base\TitleRules;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    use TitleRules;

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return $this->titleRules();
    }
}
