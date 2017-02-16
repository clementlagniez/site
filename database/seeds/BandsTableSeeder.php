<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = date('Y-m-d H:i:s');

        DB::table('bands')->insert(
            [
                'name' => 'Nononono and the noes',
                'formed' => '1785',
                'city_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    	
        DB::table('bands')->insert(
            [
            	'name' => 'Soundgarden',
                'formed' => '1985',
                'city_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
