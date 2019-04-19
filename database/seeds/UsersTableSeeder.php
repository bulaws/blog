<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $roleUser = Role::where('name', 'User')->first();
        $roleAuthor = Role::where('name', 'Author')->first();
        $roleAdmin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@example.com';
        $user->password = bcrypt('user');
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
        $user->roles()->attach($roleUser);

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->created_at = now();
        $admin->updated_at = now();
        $admin->save();
        $admin->roles()->attach($roleAdmin);

        $reception = new User();
        $reception->name = 'Author';
        $reception->email = 'Author@example.com';
        $reception->password = bcrypt('author');
        $reception->created_at = now();
        $reception->updated_at = now();
        $reception->save();
        $reception->roles()->attach($roleAuthor);
    }
}
