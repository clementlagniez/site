<?php

use Illuminate\Database\Seeder;

class SongsTracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 1,
                'track_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 2,
                'track_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 3,
                'track_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 4,
                'track_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 5,
                'track_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 6,
                'track_id' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 7,
                'track_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 8,
                'track_id' => 8,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 9,
                'track_id' => 9,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 10,
                'track_id' => 10,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 11,
                'track_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs_tracks')->insert(
            [
            	'song_id' => 12,
                'track_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
