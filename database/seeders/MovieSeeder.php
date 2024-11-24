<?php

namespace Database\Seeders;

use App\Models\Movie;
use Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = ['Doraemon', 'Bluey', 'Elemental', 'Spiderman', 'Cars'];
        for ($i = 0; $i < 5; $i++){
            Movie::create([
                'title'=> $titles[$i],
                'photo' => 'placeholder.png',
                'publish_date' => Date::now(),
                'description' => fake()->sentence(5),
            ]);
        }
    }
}
