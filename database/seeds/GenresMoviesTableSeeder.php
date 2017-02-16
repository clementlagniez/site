<?php

use Illuminate\Database\Seeder;

class GenresMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('genres_movies')->insert(
            [
                'genre_id' => 1,
                'movie_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('genres_movies')->insert(
            [
            	'genre_id' => 6,
                'movie_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
