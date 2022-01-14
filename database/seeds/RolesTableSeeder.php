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
	        	'name' => 'University',
	        	'slug' => 'university',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('roles')->insert([
	        	'name' => 'Tutor',
	        	'slug' => 'tutor',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('roles')->insert([
	        	'name' => 'Student',
	        	'slug' => 'student',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('roles')->insert([
	        	'name' => 'Parent',
	        	'slug' => 'parent',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
    	}
    }
}
