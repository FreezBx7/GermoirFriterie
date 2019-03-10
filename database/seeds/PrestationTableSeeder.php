<?php

use Illuminate\Database\Seeder;

class PrestationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestations')->insert([
            'name' => 'Sur Place'
        ]);
        DB::table('prestations')->insert([
            'name' => 'A Emporter'
        ]);
    }
}
