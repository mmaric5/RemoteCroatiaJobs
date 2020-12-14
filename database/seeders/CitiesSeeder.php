<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'Id' => 1,
            'Name' => 'Zagreb',
            'regions_id' => 1,
            ]);
    }
}
