<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('albums')->insert(
            [
                'name' => 'Lawly in the land of Lols',
                'duration' => '13:37',
                'release' => '07/10/1989',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        
        DB::table('albums')->insert(
            [
            	'name' => 'Louder than Love',
                'duration' => '58:47',
                'release' => '08/10/1989',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
