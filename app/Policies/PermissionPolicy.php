<?php

namespace App\Policies;

use App\User;

class PermissionPolicy extends SitePolicy
{
    protected $permissions = [
        'index' => 'PERMISSION_INDEX',
        'update' => 'PERMISSION_UPDATE'
    ];

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


}
