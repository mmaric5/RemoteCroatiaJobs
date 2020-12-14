<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call([
            AdsSeeder::class,
            CategorySeeder::class,
            CitiesSeeder::class,
            CompaniesSeeder::class,
            CountrySeeder::class,
            DatabaseSeeder::class,
            DrivingLicenseSeeder::class,
            LanguagesSeeder::class,
            QualificationSeeder::class,
            RegionsSeeder::class,
            TypeOfWorksSeeder::class
        ]);
    }
}