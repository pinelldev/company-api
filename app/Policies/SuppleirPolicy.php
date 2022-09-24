<?php

namespace App\Policies;

use App\Models\Suppleir;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuppleirPolicy
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

    public function create(Suppleir $suppleir)
    {
        return true;
    }
}
