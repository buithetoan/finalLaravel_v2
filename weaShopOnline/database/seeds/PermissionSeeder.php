<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//user
        DB::table('permissions')->insert([
        	'name'=>'create_user',
        	'display_name'=>'Create user',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'edit_user',
        	'display_name'=>'Edit user',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'view_user',
        	'display_name'=>'View user',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'detail_user',
        	'display_name'=>'Detail user',
        ]);
        //brand
        DB::table('permissions')->insert([
        	'name'=>'create_brand',
        	'display_name'=>'Create brand',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'edit_brand',
        	'display_name'=>'Edit brand',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'view_brand',
        	'display_name'=>'View brand',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'detail_brand',
        	'display_name'=>'Detail brand',
        ]);
        //category
        DB::table('permissions')->insert([
        	'name'=>'create_category',
        	'display_name'=>'Create category',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'edit_category',
        	'display_name'=>'Edit category',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'view_category',
        	'display_name'=>'View category',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'detail_category',
        	'display_name'=>'Detail category',
        ]);
        //product
        DB::table('permissions')->insert([
        	'name'=>'create_product',
        	'display_name'=>'Create product',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'edit_product',
        	'display_name'=>'Edit product',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'view_product',
        	'display_name'=>'View product',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'detail_product',
        	'display_name'=>'Detail product',
        ]);
        //order
        DB::table('permissions')->insert([
        	'name'=>'create_order',
        	'display_name'=>'Create order',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'edit_order',
        	'display_name'=>'Edit order',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'view_order',
        	'display_name'=>'View order',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'detail_order',
        	'display_name'=>'Detail order',
        ]);
        //slide
        DB::table('permissions')->insert([
        	'name'=>'create_slide',
        	'display_name'=>'Create slide',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'edit_slide',
        	'display_name'=>'Edit slide',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'view_slide',
        	'display_name'=>'View slide',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'detail_slide',
        	'display_name'=>'Detail slide',
        ]);
        //role
        DB::table('permissions')->insert([
        	'name'=>'create_role',
        	'display_name'=>'Create role',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'edit_role',
        	'display_name'=>'Edit role',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'view_role',
        	'display_name'=>'View role',
        ]);
        DB::table('permissions')->insert([
        	'name'=>'detail_role',
        	'display_name'=>'Detail role',
        ]);
    }
}
