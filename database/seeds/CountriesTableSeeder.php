<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('countries')->insert(
            [
                'name' => 'United Void of Nothing',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('countries')->insert(
            [
                'name' => 'United States of America',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('countries')->insert(
            [
                'name' => 'Japan',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('countries')->insert(
            [
                'name' => 'England',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
