<?php namespace App\Services;

use App\Role;

class RoleService extends Service
{
    public function __construct(Role $role) {
        $this->model = $role;
    }

    public function getRoles() {
        return $this->get([
            'with' => ['permissions']
        ]);
    }
}