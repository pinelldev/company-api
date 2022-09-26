<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Category extends Model
{
    use HasFactory, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];


    public function createModel($request)
    {
        $category = $this->create($request->all());

        return $category;
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
