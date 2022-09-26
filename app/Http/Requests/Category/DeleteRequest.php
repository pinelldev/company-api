<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\BaseFormRequest;
use App\Models\Category;

class DeleteRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $category = Category::findOrFail($this->category_id);

        return $this->user()->can('delete', $category);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => 'numeric'
        ];
    }
}
