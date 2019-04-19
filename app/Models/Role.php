<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'role_user', 'role_id', 'user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission', 'permission_role', 'permission_id', 'role_id');
    }
}
