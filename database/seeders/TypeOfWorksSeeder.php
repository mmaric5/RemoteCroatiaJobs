<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeOfWorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeOfWorks')->insert([
            'Name' => 'Studentski'
            ]);
    }
}
