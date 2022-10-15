<?php

namespace App\Http\Requests\Customer;

use App\Http\Requests\BaseFormRequest;

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
            'contactName' => 'required|string|max:30',
            'contactTitle' => 'required|string|max:50',
            'address' => 'string|max:60',
            'city' => 'string|max:50',
            'region' => 'string|max:15',
            'postalcode' => 'string|max:25',
            'country' => 'string|max:50',
            'phone' => 'string|max:25'
        ];
    }
}
