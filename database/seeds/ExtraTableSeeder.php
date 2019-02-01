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
            'name_Extras' => 'Bacon',
            'price_Extras' => 0.30
        ]);

        DB::table('extras')->insert([
            'name_Extras' => 'Cheddar',
            'price_Extras' => 0.50
        ]);

        DB::table('extras')->insert([
            'name_Extras' => 'Maroilles',
            'price_Extras' => 0.80
        ]);

        DB::table('extras')->insert([
            'name_Extras' => 'Maroilles',
            'price_Extras' => 0.80
        ]);

        DB::table('extras')->insert([
            'name_Extras' => 'Salade',
            'price_Extras' => 0.00
        ]);

        DB::table('extras')->insert([
            'name_Extras' => 'Tomates',
            'price_Extras' => 0.00
        ]);

        DB::table('extras')->insert([
            'name_Extras' => 'Oignons frits',
            'price_Extras' => 0.00
        ]);

        DB::table('extras')->insert([
            'name_Extras' => "Confit d'oignon",
            'price_Extras' => 0.00
        ]);

        DB::table('extras')->insert([
            'name_Extras' => 'Cornichon',
            'price_Extras' => 0.00
        ]);
    }
}
