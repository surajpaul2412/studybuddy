<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfColleges = \DB::table('colleges')->count();

    	if($numberOfColleges == 0)
    	{
    		DB::table('colleges')->insert([
	        	'name' => 'Harvard College',
	        	'university_id' => 2,
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now()
	        ]);
            DB::table('colleges')->insert([
                'name' => 'Oxford College',
                'university_id' => 3,
                'created_at' => carbon::now(),
                'updated_at' => carbon::now()
            ]);
    	}
    }
}
