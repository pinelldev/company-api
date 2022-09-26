<?php

namespace App\Http\Requests\Suppleir;

use App\Http\Requests\BaseFormRequest;
use App\Models\Suppleir;

class ShowRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $suppleir = Suppleir::findOrFail($this->suppleir_id);

        return $this->user()->can('view', $suppleir);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'suppleir_id' => 'numeric'
        ];
    }
}
