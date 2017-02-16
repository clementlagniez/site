<?php

use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('nationalities')->insert(
            [
                'name' => 'Booyakashan',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('nationalities')->insert(
            [
            	'name' => 'American',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('nationalities')->insert(
            [
            	'name' => 'French',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('nationalities')->insert(
            [
            	'name' => 'English',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
