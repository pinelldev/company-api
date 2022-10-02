<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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

    public function create(Product $product)
    {
        return true;
    }

    public function view(User $user, Product $product)
    {
        return true;
    }

    public function update(User $user, Product $product)
    {
        return true;
    }

    public function delete(User $user, Product $product)
    {
        return true;
    }
}
