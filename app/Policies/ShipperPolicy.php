<?php

namespace App\Policies;

use App\Models\{User, Shipper};
use Illuminate\Auth\Access\HandlesAuthorization;

class ShipperPolicy
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

    public function create(Shipper $shipper)
    {
        return true;
    }

    public function view(User $user, Shipper $shipper)
    {
        return true;
    }

    public function update(User $user, Shipper $shipper)
    {
        return true;
    }

    public function delete(User $user, Shipper $shipper)
    {
        return true;
    }


}
