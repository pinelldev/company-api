<?php

namespace App\Http\Requests\Shipper;

use App\Http\Requests\BaseFormRequest;
use App\Models\Shipper;

class DeleteRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $shipper = Shipper::findOrFail($this->shipper_id);

        return $this->user()->can('delete', $shipper);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'shipper_id' => 'numeric'
        ];
    }
}
