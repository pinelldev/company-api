<?php

namespace App\Http\Requests\Shipper;

use App\Http\Requests\BaseFormRequest;
use App\Models\Shipper;
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
            'companyName' => 'required|string|max:40',
            'phone' => 'string|max:25'
        ];
    }
}
