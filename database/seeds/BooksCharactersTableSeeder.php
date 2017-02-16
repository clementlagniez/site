<?php

use Illuminate\Database\Seeder;

class BooksCharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('books_characters')->insert(
            [
            	'book_id' => 1,
                'character_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('books_characters')->insert(
            [
            	'book_id' => 1,
                'character_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
