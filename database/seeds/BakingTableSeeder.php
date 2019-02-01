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
            'name_Bakings' => 'Bleu',
            'label_Bakings' => 'BL'
        ]);

        DB::table('bakings')->insert([
            'name_Bakings' => 'A Point',
            'label_Bakings' => 'AP'
        ]);

        DB::table('bakings')->insert([
            'name_Bakings' => 'Saigant',
            'label_Bakings' => 'SG'
        ]);

        DB::table('bakings')->insert([
            'name_Bakings' => 'Bien cuit',
            'label_Bakings' => 'BC'
        ]);

        DB::table('bakings')->insert([
            'name_Bakings' => 'Bien bien cuit',
            'label_Bakings' => 'BBC'
        ]);
    }
}
