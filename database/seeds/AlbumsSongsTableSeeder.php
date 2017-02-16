<?php

use Illuminate\Database\Seeder;

class AlbumsSongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 8,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 9,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 10,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
                'album_id' => 1,
                'song_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 8,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 9,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 10,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('albums_songs')->insert(
            [
            	'album_id' => 2,
                'song_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
