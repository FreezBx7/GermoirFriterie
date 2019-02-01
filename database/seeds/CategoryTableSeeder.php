<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name_Cat' => 'Viande_Chaud'
        ]);
        DB::table('categories')->insert([
            'name_Cat' => 'Viande_Froid'
        ]);
        DB::table('categories')->insert([
            'name_Cat' => 'Burgers'
        ]);
        DB::table('categories')->insert([
            'name_Cat' => 'Individuels'
        ]);
        DB::table('categories')->insert([
            'name_Cat' => 'Sauces'
        ]);

        DB::table('categories')->insert([
            'name_Cat' => 'Menu_Enfant'
        ]);

        DB::table('categories')->insert([
            'name_Cat' => 'Alcool'
        ]);

        DB::table('categories')->insert([
            'name_Cat' => 'Soft'
        ]);
    }
}
