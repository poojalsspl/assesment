<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'f_name' => 'Super', 
            'l_name' => 'Admin', 
            'email' => 'sadmin@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('12345678')
        ]);

        $role = Role::create(['name' => 'superadmin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->givePermissionTo($permissions);
        $permissions->assignRole($role);
    }
}
