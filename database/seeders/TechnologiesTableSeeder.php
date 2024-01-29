<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            ['HTML', '#ff0000'],
            ['CSS', '#1e90ff'],
            ['JS', '#ffff00'],
            ['VueJS', '#00ff00'],
            ['PHP', '#9370db'],
            ['Laravel', '#8b0000'],
        ];

        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->name = $technology[0];
            $new_technology->hex_color = $technology[1];

            $new_technology->save();
        } 
    }
}
