<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('characters')->insert(
            [
                'name' => 'Jean',
                'known_as' => 'Le Frenchy',
                'lastname' => 'Bombeur',
                'age' => '3',
                'book_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('characters')->insert(
            [
            	'name' => 'Tyler',
                'known_as' => NULL,
                'lastname' => 'Durden',
                'age' => NULL,
                'book_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('characters')->insert(
            [
            	'name' => 'The',
                'known_as' => 'Jack',
                'lastname' => 'Narrator',
                'age' => NULL,
                'book_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
