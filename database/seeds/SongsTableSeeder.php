<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('songs')->insert(
            [
                'name' => 'Rusty Cage',
                'duration' => '4:26',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Outshined',
                'duration' => '5:11',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Slaves & Bulldozers',
                'duration' => '6:56',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Jesus Christ Pose',
                'duration' => '5:51',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Face Pollution',
                'duration' => '2:24',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Somewhere',
                'duration' => '4:21',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Searching With My Good Eye Closed',
                'duration' => '6:31',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Room a Thousand Years Wide',
                'duration' => '4:06',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Mind Riot',
                'duration' => '4:49',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Drawing Flies',
                'duration' => '2:25',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('songs')->insert(
            [
                'name' => 'Holy Water',
                'duration' => '5:07',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('songs')->insert(
            [
                'name' => 'New Damage',
                'duration' => '5:40',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
