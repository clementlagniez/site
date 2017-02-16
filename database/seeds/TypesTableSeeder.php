<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('types')->insert(
            [
                'name' => 'junkynouny',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('types')->insert(
            [
                'name' => 'musician',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );   

        DB::table('types')->insert(
            [
                'name' => 'writer',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('types')->insert(
            [
                'name' => 'cinema',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ); 
    }
}
