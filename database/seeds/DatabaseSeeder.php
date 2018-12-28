<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('CitySeeder');
        //$this->call('CrimeSeeder');
        //$this->call('OffendersSeeder');
        $this->call('OffenderCrimeSeeder');

    }
}
