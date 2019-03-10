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
            'name' => 'Seul',
            'meta' => ' '
        ]);
        DB::table('sizes')->insert([
            'name' => 'Sandwich',
            'meta' => 'sand'
        ]);
        DB::table('sizes')->insert([
            'name' => 'Americain',
            'meta' => 'USA'
        ]);
    }
}
