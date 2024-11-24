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
        $photos = ['Doraemon.jpg', 'Bluey.png', 'Elemental.jpg', 'Spiderman.jpg', 'Cars.jpg'];
        $genreIds = ['2', '2', '1', '3', '5'];
        for ($i = 0; $i < 5; $i++){
            Movie::create([
                'title'=> $titles[$i],
                'photo' => 'photos/'.$photos[$i],
                'publish_date' => Date::now(),
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card content',
                'genre_id' => $genreIds[$i],
            ]);
        }
    }
}
