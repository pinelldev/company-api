<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SuppleirResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'company' => $this->companyName,
            'contact' => $this->contactName,
            'title' => $this->contactTitle,
            'address' => $this->address,
            'city' => $this->city,
            'region' => $this->region,
            'postcode' => $this->postalCode,
            'country' => $this->country,
            'phone' => $this->phone
        ];
    }
}
