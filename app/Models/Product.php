<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'suppleir_id', 
        'category_id', 
        'quantityPerUnit', 
        'unitPrice', 
        'unitsInStock', 
        'unitsOnOrder', 
        'reorderLevel', 
        'discontinued'
    ];

    public function suppleir()
    {
        return $this->belongsTo(Suppleir::class, 'suppleir_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function createModel($request)
    {
        $product = $this->create($request->all());

        return $product;
    }

    public function updateModel($request)
    {
        $this->update($request->all());

        return $this;
    }

    public function deleteModel()
    {
        return $this->delete();
    }
}
