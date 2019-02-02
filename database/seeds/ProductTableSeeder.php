<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name_Prod' => 'Saucisse',
            'price_Prod' => 1.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Saucisse',
            'price_Prod' => 3.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Saucisse',
            'price_Prod' => 5.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Merguez',
            'price_Prod' => 1.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Merguez',
            'price_Prod' => 3.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Merguez',
            'price_Prod' => 5.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Fricadelle',
            'price_Prod' => 1.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Fricadelle',
            'price_Prod' => 3.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Fricadelle',
            'price_Prod' => 5.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Boulette',
            'price_Prod' => 1.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Boulette',
            'price_Prod' => 3.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Boulette',
            'price_Prod' => 5.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Mexicanos',
            'price_Prod' => 2.30,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Mexicanos',
            'price_Prod' => 3.50,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Mexicanos',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Poulycroc',
            'price_Prod' => 2.30,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Poulycroc',
            'price_Prod' => 3.50,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Poulycroc',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cervelas',
            'price_Prod' => 2.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cervelas',
            'price_Prod' => 3.70,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cervelas',
            'price_Prod' => 5.70,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cervelas',
            'price_Prod' => 2.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cervelas',
            'price_Prod' => 3.70,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cervelas',
            'price_Prod' => 5.70,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Boeuf',
            'price_Prod' => 2.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Boeuf',
            'price_Prod' => 4.20,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Boeuf',
            'price_Prod' => 6.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Poulet',
            'price_Prod' => 2.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Poulet',
            'price_Prod' => 4.20,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Poulet',
            'price_Prod' => 6.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Provencale',
            'price_Prod' => 2.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Provencale',
            'price_Prod' => 4.20,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brochette Provencale',
            'price_Prod' => 6.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Grizzly',
            'price_Prod' => 2.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Grizzly',
            'price_Prod' => 4.20,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Grizzly',
            'price_Prod' => 6.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Steak',
            'price_Prod' => 2.80,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Steak',
            'price_Prod' => 3.50,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Steak',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Steak Boucher',
            'price_Prod' => 3.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Steak Boucher',
            'price_Prod' => 4.20,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Steak Boucher',
            'price_Prod' => 6.20,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Nuggets',
            'price_Prod' => 0.70,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Nuggets',
            'price_Prod' => 4.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Nuggets',
            'price_Prod' => 5.70,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jambon',
            'price_Prod' => 2.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jambon',
            'price_Prod' => 3.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jambon',
            'price_Prod' => 5.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cheddar',
            'price_Prod' => 3.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cheddar',
            'price_Prod' => 5.00,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jambon & Cheddar',
            'price_Prod' => 2.40,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jambon & Cheddar',
            'price_Prod' => 3.40,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jambon & Cheddar',
            'price_Prod' => 5.40,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Filet Americain',
            'price_Prod' => 4.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Filet Americain',
            'price_Prod' => 4.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Filet Americain',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Crabe',
            'price_Prod' => 4.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Crabe',
            'price_Prod' => 4.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Crabe',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Thon',
            'price_Prod' => 4.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Thon',
            'price_Prod' => 4.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Thon',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Poulet',
            'price_Prod' => 4.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Poulet',
            'price_Prod' => 4.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Poulet',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Landasien',
            'price_Prod' => 7.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Landasien',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Burger',
            'price_Prod' => 7.00,
            'size_Prod' => 'Sandwich',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Burger',
            'price_Prod' => 5.50,
            'size_Prod' => 'Americain',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Croque Monsieur',
            'price_Prod' => 2.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Donut Poulet Fromage',
            'price_Prod' => 2.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cheese Crack',
            'price_Prod' => 2.30,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Petite Frite',
            'price_Prod' => 2.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Grande Frite',
            'price_Prod' => 2.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Pain Frite',
            'price_Prod' => 2.70,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cheese Burger',
            'price_Prod' => 3.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Big Burger',
            'price_Prod' => 4.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Bicky',
            'price_Prod' => 3.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Bicky Crispy',
            'price_Prod' => 3.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Bicky Cheese',
            'price_Prod' => 3.90,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Chicken',
            'price_Prod' => 4.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Veggie Cheddar',
            'price_Prod' => 4.30,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Veggie Maroilles',
            'price_Prod' => 4.60,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Mayo',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Ketchup',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Andalouse',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Poivre',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Samourai',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Chti',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Pitta',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Algerienne',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Brasil',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);
        DB::table('products')->insert([
            'name_Prod' => 'Hannibal',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Burger',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => '3 Sauces',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cocktail',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Curry',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Americaine',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Moutarde',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Picalili',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Provencale',
            'price_Prod' => 0.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Nuggets',
            'price_Prod' => 5.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Fricadelle',
            'price_Prod' => 5.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Saucisse',
            'price_Prod' => 5.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Hamburger',
            'price_Prod' => 5.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jupiler',
            'price_Prod' => 2.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Jupiler 0',
            'price_Prod' => 2.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Cuvee des troll',
            'price_Prod' => 3.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Leffe',
            'price_Prod' => 3.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Triple Karmeliet',
            'price_Prod' => 4.20,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Duvel',
            'price_Prod' => 4.20,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Chouffe',
            'price_Prod' => 4.20,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Kriek',
            'price_Prod' => 3.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Anosteke',
            'price_Prod' => 4.30,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Queue de Charrue',
            'price_Prod' => 4.00,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Coca',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Coca Zero',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Fanta Orange',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Fanta Citron',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Orangina',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Oasis Tropical',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Oasis Orange',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Sprite',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Ice Tea',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Caprisun',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Perrier',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Eau Plate (Plastique)',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Eau Gazeuse (Plastique)',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Eau Plate (Verre)',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name_Prod' => 'Eau Gazeuse (Verre)',
            'price_Prod' => 1.50,
            'size_Prod' => 'Seul',
            'cat_Prod' => 'Soft'
        ]);
    }
}
