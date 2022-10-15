<?php

namespace App\Policies;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
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
    public function create(Customer $customer)
    {
        return true;
    }

    public function view(User $user, Customer $customer)
    {
        return true;
    }

    public function update(User $user , Customer $customer)
    {
        return true;
    }

    public function delete(User $user , Customer $customer)
    {
        return true;
    }
}
