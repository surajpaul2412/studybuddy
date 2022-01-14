<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfSubjects = \DB::table('subjects')->count();

    	if($numberOfSubjects == 0)
    	{
    		DB::table('subjects')->insert([
	        	'name' => 'Science',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Physics',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Chemistry',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Space Science',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Microbiology',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Technologies',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Construction',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Energy',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Transportation',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Manufactoring',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Communication',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Engineering',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Art',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('subjects')->insert([
	        	'name' => 'Mathematics',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
    	}
    }
}
