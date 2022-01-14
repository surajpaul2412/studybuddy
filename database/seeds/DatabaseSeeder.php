<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(CollegeTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LanguageLevelsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(LegalTableSeeder::class);
    }
}
