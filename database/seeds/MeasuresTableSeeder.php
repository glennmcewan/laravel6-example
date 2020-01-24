<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measures')->insert([
            [
                'slug' => 'pint_third',
                'display_name' => '1/3 pint',
            ],
            [
                'slug' => 'pint_half',
                'display_name' => '1/2 pint',
            ],
            [
                'slug' => 'pint_two_thirds',
                'display_name' => '2/3 pint',
            ],
            [
                'slug' => 'pint_one',
                'display_name' => '1 pint',
            ],
        ]);
    }
}
