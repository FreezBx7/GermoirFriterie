<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'name_Sizes' => 'Seul',
            'label_Sizes' => ' '
        ]);
        DB::table('sizes')->insert([
            'name_Sizes' => 'Sandwich',
            'label_Sizes' => 'sand'
        ]);
        DB::table('sizes')->insert([
            'name_Sizes' => 'Americain',
            'label_Sizes' => 'USA'
        ]);
    }
}
