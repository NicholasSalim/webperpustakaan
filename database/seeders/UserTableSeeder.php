<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach(Role::where('name','admin')->first());

        $user = new User;
        $user->name = 'nicho';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('nicho');
        $user->save();
        $user->roles()->attach(Role::where('name','nicho')->first());
    }
}
