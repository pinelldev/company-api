<?php

namespace App\Http\Requests\Suppleir;

use App\Exceptions\JsonAuthorizationException;
use App\Exceptions\JsonValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

    protected function failedAuthorization()
    {
        throw new JsonAuthorizationException;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new JsonValidationException($validator);
    }
}
