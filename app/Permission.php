<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles() {
        return $tnis->belongsToMany('App\Role', 'role_permission');
    }
}
