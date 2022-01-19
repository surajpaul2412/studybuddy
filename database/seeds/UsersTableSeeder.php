<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfUsers = \DB::table('users')->count();

    	if($numberOfUsers == 0)
    	{
    		DB::table('users')->insert([
    			'role_id' => '1',
	        	'name' => 'Admin',
	        	'username' => "admin",
	        	'email' => 'admin@collararp.com',
	        	'mobile' => '1234567891',
	        	'company_name' => 'xyz pvt ltd',
	        	'gender' => 'male',
	        	'address' => 't-100 new delhi',
	        	'country' => 'india',
	        	'state' => 'delhi',
	        	'zipcode' => '110008',
	        	'password' => bcrypt('test1234'),
	        	'status' => 1,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('users')->insert([
    			'role_id' => '2',
	        	'name' => 'Fashion Designer',
	        	'username' => "fashion_designer",
	        	'email' => 'designer@collararp.com',
	        	'mobile' => '1234567892',
	        	'company_name' => 'xyz pvt ltd',
	        	'gender' => 'male',
	        	'address' => 't-100 new delhi',
	        	'country' => 'india',
	        	'state' => 'delhi',
	        	'zipcode' => '110008',
	        	'password' => bcrypt('test1234'),
	        	'status' => 1,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('users')->insert([
    			'role_id' => '3',
	        	'name' => 'WholeSaler',
	        	'username' => "wholeSaler",
	        	'email' => 'wholeSaler@collararp.com',
	        	'mobile' => '1234567893',
	        	'company_name' => 'xyz pvt ltd',
	        	'gender' => 'male',
	        	'address' => 't-100 new delhi',
	        	'country' => 'india',
	        	'state' => 'delhi',
	        	'zipcode' => '110008',
	        	'password' => bcrypt('test1234'),
	        	'status' => 1,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('users')->insert([
    			'role_id' => '4',
	        	'name' => 'Factory Owner',
	        	'username' => "factory_owner",
	        	'email' => 'factory_owner@collararp.com',
	        	'mobile' => '1234567894',
	        	'company_name' => 'xyz pvt ltd',
	        	'gender' => 'male',
	        	'address' => 't-100 new delhi',
	        	'country' => 'india',
	        	'state' => 'delhi',
	        	'zipcode' => '110008',
	        	'password' => bcrypt('test1234'),
	        	'status' => 1,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
    	}
    }
}
