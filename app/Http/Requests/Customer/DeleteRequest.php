<?php

namespace App\Http\Requests\Customer;

use App\Http\Requests\BaseFormRequest;
use App\Models\Customer;

class DeleteRequest extends BaseFormRequest

{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $customer = Customer::findOrFail($this->customer_id);

        return $this->user()->can('delete', $customer);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'customer_id' => 'numeric'
        ];
    }
}
