<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName', 'phone'
    ];

    public function createModel($request)
    {
        $shipper = $this->create($request->all());

        return $shipper;
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
