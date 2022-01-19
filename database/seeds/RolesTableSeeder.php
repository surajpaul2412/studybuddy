<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$numberOfRoles = \DB::table('roles')->count();

    	if($numberOfRoles == 0)
    	{
    		DB::table('roles')->insert([
	        	'name' => 'Admin',
	        	'slug' => 'admin',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('roles')->insert([
	        	'name' => 'Fashion Designer',
	        	'slug' => 'fashion_designer',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('roles')->insert([
	        	'name' => 'WholeSaler',
	        	'slug' => 'wholeSaler',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('roles')->insert([
	        	'name' => 'Factory Owner',
	        	'slug' => 'factory_owner',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
    	}
    }
}
