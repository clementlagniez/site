<?php

use Illuminate\Database\Seeder;

class ArtistsAlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('artists_albums')->insert(
            [
            	'artist_id' => 1,
                'album_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('artists_albums')->insert(
            [
                'artist_id' => 2,
                'album_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
