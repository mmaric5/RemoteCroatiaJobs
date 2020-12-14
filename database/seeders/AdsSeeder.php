<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->insert([
            'Title' => 'Title1',
            'Conditions' => 'Excellent',
            'whatDoWeOffer' => 'Paycheck',
            'typeOfWorks_id' => 1,
            'linkForApplication' => 'www.link.hr',
            'category_id' => 1,
            'qualification_id' => 1,
            'drivingLicense_id' => 1,
            'language_id' => 1, 
            'WorkFromHome' => 1,
            'description' => 'GoodJob',
            'category' => 'Administrativna zanimanja',
            'companies_id' => 1
            ]);
    }
}
