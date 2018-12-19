<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany('App\Role', 'user_role');
    }

    public function canDo($permission, $require = false) {
        if (is_array($permission)) {
            foreach ($permission as $permName) {
                $canDo = $this->canDo($permName);
                if ($canDo && !$require) {
                    return true;
                } else if (!$canDo && $require) {
                    return false;
                }
            }
            return $require ? true : false;
        } else {
            foreach ($this->roles as $role) {
                foreach ($role->permissions as $perm) {
                    if (str_is($permission, $perm->name)) return true;
                }
            }
        }
        return false;
    }

    public function hasRole($name, $require = false) {
        if (is_array($name)) {
            foreach ($name as $roleName) {
                $hasRole = $this->hasRole($roleName);
                if ($hasRole && !$require) {
                    return true;
                } elseif (!$hasRole && $require) {
                    return false;
                }
            }
            return $require ? true : false;
        } else {
            foreach ($this->roles as $role) {
                if (str_is($name, $role->name)) return true;
            }
        }
        return false;
    }
}
