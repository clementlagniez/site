<?php

use Illuminate\Database\Seeder;

class SubtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('subtypes')->insert(
            [
                'name' => 'unemployed',
                'type_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes')->insert(
            [
            	'name' => 'singer',
                'type_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes')->insert(
            [
            	'name' => 'guitarist',
                'type_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes')->insert(
            [
            	'name' => 'bassist',
                'type_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes')->insert(
            [
            	'name' => 'drummer',
                'type_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes')->insert(
            [
                'name' => 'novelist',
                'type_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('subtypes')->insert(
            [
                'name' => 'director',
                'type_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
