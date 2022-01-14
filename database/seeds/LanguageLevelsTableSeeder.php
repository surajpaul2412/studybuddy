<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class LanguageLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfLanguageLevels = \DB::table('language_levels')->count();

    	if($numberOfLanguageLevels == 0)
    	{
    		DB::table('language_levels')->insert([
	        	'name' => 'A1',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('language_levels')->insert([
	        	'name' => 'A2',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('language_levels')->insert([
	        	'name' => 'B1',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('language_levels')->insert([
	        	'name' => 'B2',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('language_levels')->insert([
	        	'name' => 'C1',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('language_levels')->insert([
	        	'name' => 'C2',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
    	}
    }
}
