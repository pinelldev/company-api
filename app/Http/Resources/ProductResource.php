<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'suppleir' => $this->suppleir->companyName,
            'category' => $this->category->name,
            'quantityPerUnit' => $this->quantityPerUnit,
            'unitPrice' => $this->unitPrice,
            'unitsInStock' => $this->unitsInStock,
            'unitsOnOrder' => $this->unitsOnOrder,
            'reorderLevel' => $this->reorderLevel,
            'discontinued' => $this->discontinued
        ];
    }
}
