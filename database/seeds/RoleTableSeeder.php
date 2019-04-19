<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleUser = new Role();
        $roleUser->name = 'User';
        $roleUser->description = 'User';
        $roleUser->created_at = now();
        $roleUser->updated_at = now();
        $roleUser->save();

        $roleReception = new Role();
        $roleReception->name = 'Author';
        $roleReception->description = 'Author';
        $roleReception->created_at = now();
        $roleReception->updated_at = now();
        $roleReception->save();

        $roleAdmin = new Role();
        $roleAdmin->name = 'Admin';
        $roleAdmin->description = 'Admin';
        $roleAdmin->created_at = now();
        $roleAdmin->updated_at = now();
        $roleAdmin->save();
    }
}
