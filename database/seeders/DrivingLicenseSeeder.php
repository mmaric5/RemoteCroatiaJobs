<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrivingLicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivingLicense')->insert([
            'Name' => 'B kategorija'
            ]);
    }
}
