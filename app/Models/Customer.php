<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
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
        $customer = $this->create($request->all());

        return $customer;
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
