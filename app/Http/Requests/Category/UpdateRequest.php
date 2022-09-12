<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\BaseFormRequest;
use App\Models\Category;

class UpdateRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:40|unique:categories,name,'. $this->category_id,
            'description' => 'required|string'
        ];
    }
}
