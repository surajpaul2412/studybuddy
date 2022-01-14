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
	        	'first_name' => 'Admin',
	        	'last_name' => "",
	        	'email' => 'admin@fly.com',
	        	'country' => 'USA',
	        	'city' => 'Canada',
	        	'mobile' => '1234567890',
	        	'password' => bcrypt('test1234'),
	        	'status' => 1,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('users')->insert([
    			'role_id' => '2',
	        	'first_name' => 'Harvard University, Massachusetts, Cambridge',
	        	'last_name' => "",
	        	'email' => 'harvard@fly.com',
	        	'country' => 'USA',
	        	'city' => 'Texus',
	        	'mobile' => '1234567891',
	        	'password' => bcrypt('test1234'),
	        	'status' => 1,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('users')->insert([
    			'role_id' => '2',
	        	'first_name' => 'University of Oxford',
	        	'last_name' => "",
	        	'email' => 'oxford@fly.com',
	        	'country' => 'USA',
	        	'city' => 'Texus',
	        	'mobile' => '1234567892',
	        	'password' => bcrypt('test1234'),
	        	'status' => 1,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
    	}
    }
}
