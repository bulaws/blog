<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();
        DB::table('permission_role')->delete();
        DB::table('users')->delete();
        DB::table('roles')->delete();
        DB::table('role_user')->delete();

        $roleUser = Role::where('name', 'User')->first();
        $roleAuthor = Role::where('name', 'Author')->first();
        $roleAdmin = Role::where('name', 'Admin')->first();


        $userPermission = new Permission();
        $userPermission->name = 'view-post';
        $userPermission->display_name = 'Display post';
        $userPermission->description = 'See only post';
        $userPermission->created_at = now();
        $userPermission->updated_at = now();
        $userPermission->save();
        $userPermission->roles()->attach($roleUser);
        $userPermission->roles()->attach($roleAuthor);
        $userPermission->roles()->attach($roleAdmin);

        $userPermission = new Permission();
        $userPermission->name = 'create-post';
        $userPermission->display_name = 'Create post';
        $userPermission->description = 'Create post';
        $userPermission->created_at = now();
        $userPermission->updated_at = now();
        $userPermission->save();
        $userPermission->roles()->attach($roleUser);
        $userPermission->roles()->attach($roleAuthor);
        $userPermission->roles()->attach($roleAdmin);

        $userPermission = new Permission();
        $userPermission->name = 'edit-post';
        $userPermission->display_name = 'Edit post';
        $userPermission->description = 'Edit post';
        $userPermission->created_at = now();
        $userPermission->updated_at = now();
        $userPermission->save();
        $userPermission->roles()->attach($roleAuthor);
        $userPermission->roles()->attach($roleAdmin);

        $userPermission = new Permission();
        $userPermission->name = 'delete-post';
        $userPermission->display_name = 'Delete post';
        $userPermission->description = 'Delete post';
        $userPermission->created_at = now();
        $userPermission->updated_at = now();
        $userPermission->save();
        $userPermission->roles()->attach($roleAuthor);
        $userPermission->roles()->attach($roleAdmin);

    }
}
