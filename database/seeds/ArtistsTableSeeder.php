<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('artists')->insert(
            [
                'name' => 'Jimmy',
                'known_as' => '',
                'lastname' => 'Changa',
                'birth' => '31/02/2000',
                'death' => '',
                'city_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('artists')->insert(
            [
            	'name' => 'Christopher John',
                'known_as' => 'Chris Cornell',
                'lastname' => 'Boyle',
                'birth' => '20/07/1964',
                'death' => '',
                'city_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('artists')->insert(
            [
            	'name' => 'Kim',
                'known_as' => '',
                'lastname' => 'Thayil',
                'birth' => '04/09/1960',
                'death' => '',
                'city_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

       DB::table('artists')->insert(
            [
                'name' => 'Ben',
                'known_as' => '',
                'lastname' => 'Shepherd',
                'birth' => '20/09/1968',
                'death' => '',
                'city_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
       
       DB::table('artists')->insert(
            [
            	'name' => 'Matt',
                'known_as' => '',
                'lastname' => 'Cameron',
                'birth' => '28/11/1962',
                'death' => '',
                'city_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

       DB::table('artists')->insert(
            [
                'name' => 'Chuck',
                'known_as' => '',
                'lastname' => 'Palahniuk',
                'birth' => '21/02/1962',
                'death' => '',
                'city_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

       DB::table('artists')->insert(
            [
                'name' => 'Stanley',
                'known_as' => '',
                'lastname' => 'Kubrick',
                'birth' => '26/07/1928',
                'death' => '07/03/1999',
                'city_id' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}


            