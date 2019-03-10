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
            'name' => 'Viande Chaude'
        ]);
        DB::table('categories')->insert([
            'name' => 'Viande Froide'
        ]);
        DB::table('categories')->insert([
            'name' => 'Burgers'
        ]);
        DB::table('categories')->insert([
            'name' => 'Individuels'
        ]);
        DB::table('categories')->insert([
            'name' => 'Sauces'
        ]);

        DB::table('categories')->insert([
            'name' => 'Menu_Enfant'
        ]);

        DB::table('categories')->insert([
            'name' => 'Alcool'
        ]);

        DB::table('categories')->insert([
            'name' => 'Soft'
        ]);
    }
}
