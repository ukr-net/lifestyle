<?php

namespace App\Policies;

use App\User;

class MenuPolicy extends SitePolicy
{
    protected $permissions = [
        'index' => 'MENU_INDEX',
        'view' => 'MENU_VIEW',
        'create' => 'MENU_ADD',
        'update' => 'MENU_UPDATE',
        'delete' => 'MENU_DELETE',
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
