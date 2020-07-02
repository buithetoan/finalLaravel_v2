<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
        	'full_name'=>'David',
        	'address'=>'12 Arizona',
        	'phone_no'=>'0123456789',
        	'email'=>'david@gmail.com',
        	'slug'=>'David',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('customers')->insert([
        	'full_name'=>'Jacop',
        	'address'=>'12 Arizona',
        	'phone_no'=>'0123456789',
        	'email'=>'jacop@gmail.com',
        	'slug'=>'Jacop',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('customers')->insert([
        	'full_name'=>'Sarah',
        	'address'=>'12 Arizona',
        	'phone_no'=>'0123456789',
        	'email'=>'sarah@gmail.com',
        	'slug'=>'Sarah',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('customers')->insert([
        	'full_name'=>'John',
        	'address'=>'12 Arizona',
        	'phone_no'=>'0123456789',
        	'email'=>'john@gmail.com',
        	'slug'=>'John',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('customers')->insert([
        	'full_name'=>'Bill',
        	'address'=>'12 Arizona',
        	'phone_no'=>'0123456789',
        	'email'=>'bill@gmail.com',
        	'slug'=>'Bill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
