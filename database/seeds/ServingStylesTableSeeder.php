<?php

use Illuminate\Database\Seeder;

class ServingStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serving_styles')->insert([
            [
                'slug' => 'cask',
                'display_name' => 'Cask',
            ],
            [
                'slug' => 'keg',
                'display_name' => 'Keg',
            ],
            [
                'slug' => 'bottle',
                'display_name' => 'Bottle',
            ],
            [
                'slug' => 'can',
                'display_name' => 'Can',
            ],
        ]);
    }
}
