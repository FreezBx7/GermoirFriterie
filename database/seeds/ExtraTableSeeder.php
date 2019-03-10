<?php

use Illuminate\Database\Seeder;

class ExtraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->insert([
            'name' => 'Bacon',
            'price' => 0.30
        ]);

        DB::table('extras')->insert([
            'name' => 'Cheddar',
            'price' => 0.50
        ]);

        DB::table('extras')->insert([
            'name' => 'Maroilles',
            'price' => 0.80
        ]);

        DB::table('extras')->insert([
            'name' => 'Salade',
            'price' => 0.00
        ]);

        DB::table('extras')->insert([
            'name' => 'Tomates',
            'price' => 0.00
        ]);

        DB::table('extras')->insert([
            'name' => 'Oignons frits',
            'price' => 0.00
        ]);

        DB::table('extras')->insert([
            'name' => "Confit d'oignon",
            'price' => 0.00
        ]);

        DB::table('extras')->insert([
            'name' => 'Cornichon',
            'price' => 0.00
        ]);
    }
}
