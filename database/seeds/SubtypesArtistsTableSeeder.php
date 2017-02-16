<?php

use Illuminate\Database\Seeder;

class SubtypesArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('subtypes_artists')->insert(
            [
                'subtype_id' => 1,
                'artist_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('subtypes_artists')->insert(
            [
            	'subtype_id' => 2,
                'artist_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes_artists')->insert(
            [
            	'subtype_id' => 3,
                'artist_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes_artists')->insert(
            [
            	'subtype_id' => 4,
                'artist_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes_artists')->insert(
            [
            	'subtype_id' => 5,
                'artist_id' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes_artists')->insert(
            [
            	'subtype_id' => 6,
                'artist_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}