<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppleir extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName',
        'contactName',
        'contactTitle',
        'address',
        'city',
        'region',
        'postalCode',
        'country',
        'phone'
    ];

    public function createModel($request)
    {
        $suppleir = $this->create($request->only([
            'companyName', 'contactName', 'contactTitle'
        ]));

        return $suppleir;
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

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
