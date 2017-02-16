<?php

use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('tracks')->insert(
            [
            	'number' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 8,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 9,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 10,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('tracks')->insert(
            [
            	'number' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
