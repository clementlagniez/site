<?php

use Illuminate\Database\Seeder;

class MoviesCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('movies_cities')->insert(
            [
                'movie_id' => 1,
                'city_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('movies_cities')->insert(
            [
            	'movie_id' => 2,
                'city_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
