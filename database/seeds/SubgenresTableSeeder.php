<?php

use Illuminate\Database\Seeder;

class SubgenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('subgenres')->insert(
            [
                'name' => 'junkskank',
                'genre_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('subgenres')->insert(
            [
            	'name' => 'grunge',
                'genre_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subgenres')->insert(
            [
            	'name' => 'stoner',
                'genre_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subgenres')->insert(
            [
            	'name' => 'psychedelic',
                'genre_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subgenres')->insert(
            [
            	'name' => 'classical',
                'genre_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subgenres')->insert(
            [
                'name' => 'drum\'n\'bass',
                'genre_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subgenres')->insert(
            [
                'name' => 'gangsta',
                'genre_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subgenres')->insert(
            [
                'name' => 'novel',
                'genre_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subgenres')->insert(
            [
                'name' => 'movie',
                'genre_id' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}