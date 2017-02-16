<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = date('Y-m-d H:i:s');

        DB::table('genres')->insert(
            [
                'name' => 'nope',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );   


        DB::table('genres')->insert(
            [
                'name' => 'rock',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );   

        DB::table('genres')->insert(
            [
                'name' => 'electro',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('genres')->insert(
            [
                'name' => 'rap',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('genres')->insert(
            [
                'name' => 'satirical',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('genres')->insert(
            [
                'name' => 'horror',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );     
    }
}
