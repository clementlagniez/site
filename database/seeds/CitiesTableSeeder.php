<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('cities')->insert(
            [
                'name' => 'Nowhere',
                'state_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('cities')->insert(
            [
                'name' => 'Seattle',
                'state_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('cities')->insert(
            [
                'name' => 'Okinawa',
                'state_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('cities')->insert(
            [
                'name' => 'San Diego',
                'state_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('cities')->insert(
            [
                'name' => 'Pasco',
                'state_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('cities')->insert(
            [
                'name' => 'New-York',
                'state_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('cities')->insert(
            [
                'name' => 'London',
                'state_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
