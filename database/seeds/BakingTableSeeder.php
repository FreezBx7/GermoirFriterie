<?php

use Illuminate\Database\Seeder;

class BakingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bakings')->insert([
            'name' => 'Bleu',
            'meta' => 'BL'
        ]);

        DB::table('bakings')->insert([
            'name' => 'A Point',
            'meta' => 'AP'
        ]);

        DB::table('bakings')->insert([
            'name' => 'Saigant',
            'meta' => 'SG'
        ]);

        DB::table('bakings')->insert([
            'name' => 'Bien cuit',
            'meta' => 'BC'
        ]);

        DB::table('bakings')->insert([
            'name' => 'Bien bien cuit',
            'meta' => 'BBC'
        ]);

        DB::table('bakings')->insert([
            'name' => 'None',
            'meta' => ''
        ]);
    }
}
