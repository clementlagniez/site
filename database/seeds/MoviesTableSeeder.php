<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('movies')->insert(
            [
                'name' => 'Right in da Butt',
                'release' => '14/07/1789',
                'year' => '',
                'duration' => '69 minutes',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('movies')->insert(
            [
            	'name' => 'The Shining',
                'release' => '23/05/1980',
                'year' => '',
                'duration' => '144 minutes',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}