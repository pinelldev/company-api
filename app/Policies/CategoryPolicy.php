<?php

namespace App\Policies;

use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(Category $category)
    {
        return true;
    }

    public function show(Category $category, Category $model)
    {
        return true;
    }

    public function update(Category $category, Category $model)
    {
        return true;
    }

    public function delete(Category $category, Category $model)
    {
        return true;
    }
}
