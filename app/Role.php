<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users() {
        return $this->belongsToMany('App\User', 'user_role');
    }

    public function permissions() {
        return $this->belongsToMany('App\Permission', 'role_permission');
    }

    public function hasPermission($permissionName, $require = false) {
        if (is_array($permissionName)) {
            foreach ($permissionName as $name) {
                $hasPermission = $this->hasPermission($name);
                if ($hasPermission && !$require) {
                    return true;
                } elseif (!$hasPermission && $require) {
                    return false;
                }
            }
            return $require ? true : false;
        } else {
            foreach ($this->permissions as $permission) {
                if (str_is($permissionName, $permission->name)) return true;
            }
        }
        return false;
    }

    public function savePermissions($inputPermissions) {
        if (!empty($inputPermissions)) {
            $this->permissions()->sync($inputPermissions);
        } else {
            $this->permissions()->detach();
        }

        return true;
    }
}
