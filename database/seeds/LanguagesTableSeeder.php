<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfLanguages = \DB::table('languages')->count();

    	if($numberOfLanguages == 0)
    	{
    		DB::table('languages')->insert([
    			'lang_code' => 'en',
	        	'name' => 'English',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('languages')->insert([
    			'lang_code' => 'de',
	        	'name' => 'German',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('languages')->insert([
    			'lang_code' => 'es',
	        	'name' => 'Spanish; Castilian',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
	        DB::table('languages')->insert([
    			'lang_code' => 'ru',
	        	'name' => 'Russian',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
    	}
    }
}
