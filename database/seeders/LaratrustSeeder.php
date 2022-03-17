<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       // Role::create(['name' => 'useradmin', 'display_name' => 'Useradmin']);
       // Role::create(['name' => 'sales', 'display_name' => 'Sales']);

       Permission::create(['name' => 'create_user']);
       Permission::create(['name' => 'edit_user']);
       Permission::create(['name' => 'view_user']);
       Permission::create(['name' => 'delete_user']);
       Permission::create(['name' => 'list_user']);
       Permission::create(['name' => 'create_product']);
       Permission::create(['name' => 'edit_product']);
       Permission::create(['name' => 'view_product']);
       Permission::create(['name' => 'delete_product']);
       Permission::create(['name' => 'list_product']);
       Permission::create(['name' => 'create_category']);
       Permission::create(['name' => 'edit_category']);
       Permission::create(['name' => 'view_category']);
       Permission::create(['name' => 'delete_category']);
       Permission::create(['name' => 'list_category']);
       Permission::create(['name' => 'role-create']);
       Permission::create(['name' => 'role-edit']);
       Permission::create(['name' => 'role-delete']);
       Permission::create(['name' => 'role-list']);

       
    }
}
