<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name'=>'ROLE_ADMIN',
        	'display_name'=>'Administrator'
        ]);
        DB::table('roles')->insert([
        	'name'=>'ROLE_MANAGER',
        	'display_name'=>'Manager'
        ]);
        DB::table('roles')->insert([
        	'name'=>'ROLE_STAFF',
        	'display_name'=>'Staff'
        ]);
        DB::table('roles')->insert([
        	'name'=>'ROLE_CUSTOMER',
        	'display_name'=>'Customer'
        ]);
    }
}
