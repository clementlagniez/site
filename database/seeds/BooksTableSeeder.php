<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('books')->insert(
            [
                'name' => 'Novo Ghetto',
                'nopages' => '3',
                'release' => '2019',
                'artist_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('books')->insert(
            [
            	'name' => 'Fight Club',
                'nopages' => '258',
                'release' => '1996',
                'artist_id' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}