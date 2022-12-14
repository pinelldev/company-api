<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\BaseFormRequest;
use App\Models\Category;
use App\Models\User;

class CreateRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', User::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:categories|max:40',
            'description' => 'required|string'
        ];
    }
}
