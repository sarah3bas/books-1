<?php

use Illuminate\Database\Seeder;

class locationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Location::create(['location_name'=>'cairo']);
        \App\Location::create(['location_name'=>'Alex']);
        \App\Location::create(['location_name'=>'Daqhalya']);
       

    }
}
