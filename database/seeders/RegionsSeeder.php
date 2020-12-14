<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'Id' => 1,
            'Name' => 'Grad Zagreb',
            'CountriesId' => 1
            ]);
    }
}
