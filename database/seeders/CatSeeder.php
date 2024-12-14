<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cats')->insert([
            ['name' => 'Mittens',
            'breed' => 'Siamese',
            'age' => 3,
            'color' => 'white',
            'castrated' => true,
            'vaccinated' => true,
        ], [
            'name' => 'Whiskers',
            'breed' => 'Persian',
            'age' => 2,
            'color' => 'black',
            'castrated' => false,
            'vaccinated' => true,
        ], [
            'name' => 'Fluffy',
            'breed' => 'Maine Co',
            'age' => 1,
            'color' => 'grey',
            'castrated' => false,
            'vaccinated' => false,
        ]
        ]);
    }
}
