<?php

use Illuminate\Database\Seeder;

class GenresBandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('genres_bands')->insert(
            [
            	'genre_id' => 1,
                'band_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('genres_bands')->insert(
            [
                'genre_id' => 2,
                'band_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
