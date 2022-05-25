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
        $seeders=array('DivisionSeeder','DistrictSeeder','UpazillaSeeder');
//        $this->call(DivisionSeeder::class);
        foreach($seeders as $seed){
            $this->call($seed);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
