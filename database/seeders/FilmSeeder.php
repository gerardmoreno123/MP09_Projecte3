<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            ['title' => 'The Shawshank Redemption',
            'description' => 'A banker convicted of uxoricide forms a friendship over a quarter century with a hardened convict, while maintaining his innocence and trying to remain hopeful through simple compassion',
            'release_year' => '1994-10-14',
            'length' => 142,
            'rating' => '8.74'
        ], [
            'title' => 'The Godfather',
            'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son',
            'release_year' => '1972-03-24',
            'length' => 175,
            'rating' => '8.66'
        ], [
            'title' => 'The Dark Knight',
            'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice',
            'release_year' => '2008-07-18',
            'length' => 152,
            'rating' => '8.64'
        ]
        ]);
    }
}
