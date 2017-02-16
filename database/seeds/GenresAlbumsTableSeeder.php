<?php

use Illuminate\Database\Seeder;

class GenresAlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('genres_albums')->insert(
            [
            	'genre_id' => 1,
                'album_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('genres_albums')->insert(
            [
                'genre_id' => 2,
                'album_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
