<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'Name' => 'BitWise',
            'Address' => 'Zagreb',
            'cities_id' => 1
            ]);
    }
}
