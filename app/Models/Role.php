<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends Model
{

    protected $fillable = [
        'id', 'name', 'description'
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'role_user');
    }

    public function hasAccess(array $permissions) : bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission))
                return true;
        }
        return false;
    }

    private function hasPermission(string $permission) : bool
    {
        return $this->permissions[$permission] ?? false;
    }
}
