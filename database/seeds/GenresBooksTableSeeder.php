<?php

use Illuminate\Database\Seeder;

class GenresBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('genres_books')->insert(
            [
            	'genre_id' => 1,
                'book_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('genres_books')->insert(
            [
                'genre_id' => 5,
                'book_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
