<?php

use Illuminate\Database\Seeder;

class MoviesArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('movies_artists')->insert(
            [
                'movie_id' => 1,
                'artist_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('movies_artists')->insert(
            [
            	'movie_id' => 2,
                'artist_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
