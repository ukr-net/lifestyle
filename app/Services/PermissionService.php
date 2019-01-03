<?php namespace App\Services;

use App\Permission;
use App\Services\RoleService;

class PermissionService extends Service 
{
    protected $roleService;

    public function __construct(Permission $permission, RoleService $roleService) {
        $this->model = $permission;
        $this->roleService = $roleService;
    }

    public function changePermissions($data) {
        $roles = $this->roleService->getAll();
        foreach ($roles as $role) {
            if (isset($data[$role->id])) {
                $role->savePermissions($data[$role->id]);
            } else {
                $role->savePermissions([]);
            }
        }

        return ['status' => 'Permissions updated'];
    }
}