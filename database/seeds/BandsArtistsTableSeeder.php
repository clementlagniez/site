<?php

use Illuminate\Database\Seeder;

class BandsArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('bands_artists')->insert(
            [
                'band_id' => 1,
                'artist_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('bands_artists')->insert(
            [
            	'band_id' => 2,
                'artist_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('bands_artists')->insert(
            [
            	'band_id' => 2,
                'artist_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('bands_artists')->insert(
            [
            	'band_id' => 2,
                'artist_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('bands_artists')->insert(
            [
            	'band_id' => 2,
                'artist_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
