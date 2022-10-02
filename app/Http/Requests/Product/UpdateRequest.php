<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\BaseFormRequest;
use App\Models\Product;

class UpdateRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $product = Product::findOrFail($this->product_id);

        return $this->user()->can('update', $product);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:40',
            'suppleir_id' => 'nullable|numeric',
            'category_id' => 'nullable|numeric',
            'quantityPerUnit' => 'required|string|max:20',
            'unitPrice' => 'required|numeric',
            'unitsInStock' => 'nullable|numeric',
            'unitsOnOrder' => 'nullable|numeric',
            'reorderLevel' => 'nullable|numeric',
            'discontinued' => 'nullable|numeric'
        ];
    }
}
