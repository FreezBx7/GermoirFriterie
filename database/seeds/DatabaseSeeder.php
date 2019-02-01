<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PrestationTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BakingTableSeeder::class);
        $this->call(ExtraTableSeeder::class);
        $this->call(ProductTableSeeder::class);

    }
}
