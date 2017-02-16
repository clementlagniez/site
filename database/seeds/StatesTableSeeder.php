<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('states')->insert(
            [
                'name' => 'Nowhere',
                'country_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('states')->insert(
            [
                'name' => 'Washington',
                'country_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('states')->insert(
            [
                'name' => 'Kyushu',
                'country_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('states')->insert(
            [
                'name' => 'California',
                'country_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('states')->insert(
            [
                'name' => 'New-York',
                'country_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('states')->insert(
            [
                'name' => 'Colorado',
                'country_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('states')->insert(
            [
                'name' => 'London',
                'country_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
