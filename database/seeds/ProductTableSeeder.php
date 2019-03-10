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
            'name' => 'Saucisse',
            'price' => 1.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Saucisse',
            'price' => 3.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Saucisse',
            'price' => 5.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Merguez',
            'price' => 1.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Merguez',
            'price' => 3.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Merguez',
            'price' => 5.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Fricadelle',
            'price' => 1.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Fricadelle',
            'price' => 3.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Fricadelle',
            'price' => 5.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Boulette',
            'price' => 1.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Boulette',
            'price' => 3.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Boulette',
            'price' => 5.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Mexicanos',
            'price' => 2.30,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Mexicanos',
            'price' => 3.50,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Mexicanos',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Poulycroc',
            'price' => 2.30,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Poulycroc',
            'price' => 3.50,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Poulycroc',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Cervelas',
            'price' => 2.50,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Cervelas',
            'price' => 3.70,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Cervelas',
            'price' => 5.70,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Cervelas',
            'price' => 2.50,
            'size' => 'Seul',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Cervelas',
            'price' => 3.70,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Cervelas',
            'price' => 5.70,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Boeuf',
            'price' => 2.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Boeuf',
            'price' => 4.20,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Boeuf',
            'price' => 6.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Poulet',
            'price' => 2.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Poulet',
            'price' => 4.20,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Poulet',
            'price' => 6.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Provencale',
            'price' => 2.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Provencale',
            'price' => 4.20,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Brochette Provencale',
            'price' => 6.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Grizzly',
            'price' => 2.90,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Grizzly',
            'price' => 4.20,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Grizzly',
            'price' => 6.00,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Steak',
            'price' => 2.80,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Steak',
            'price' => 3.50,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Steak',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Steak Boucher',
            'price' => 3.50,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Steak Boucher',
            'price' => 4.20,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Steak Boucher',
            'price' => 6.20,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Nuggets',
            'price' => 0.70,
            'size' => 'Seul',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Nuggets',
            'price' => 4.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Nuggets',
            'price' => 5.70,
            'size' => 'Americain',
            'cat' => 'Viande Chaude'
        ]);

        DB::table('products')->insert([
            'name' => 'Jambon',
            'price' => 2.00,
            'size' => 'Seul',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Jambon',
            'price' => 3.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Jambon',
            'price' => 5.00,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Cheddar',
            'price' => 3.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Cheddar',
            'price' => 5.00,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Jambon & Cheddar',
            'price' => 2.40,
            'size' => 'Seul',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Jambon & Cheddar',
            'price' => 3.40,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Jambon & Cheddar',
            'price' => 5.40,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Filet Americain',
            'price' => 4.00,
            'size' => 'Seul',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Filet Americain',
            'price' => 4.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Filet Americain',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Crabe',
            'price' => 4.00,
            'size' => 'Seul',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Crabe',
            'price' => 4.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Crabe',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Thon',
            'price' => 4.00,
            'size' => 'Seul',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Thon',
            'price' => 4.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Thon',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Poulet',
            'price' => 4.00,
            'size' => 'Seul',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Poulet',
            'price' => 4.00,
            'size' => 'Sandwich',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Poulet',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Viande Froide'
        ]);

        DB::table('products')->insert([
            'name' => 'Landasien',
            'price' => 7.00,
            'size' => 'Sandwich',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Landasien',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Burger',
            'price' => 7.00,
            'size' => 'Sandwich',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Burger',
            'price' => 5.50,
            'size' => 'Americain',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Croque Monsieur',
            'price' => 2.50,
            'size' => 'Seul',
            'cat' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name' => 'Donut Poulet Fromage',
            'price' => 2.00,
            'size' => 'Seul',
            'cat' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name' => 'Cheese Crack',
            'price' => 2.30,
            'size' => 'Seul',
            'cat' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name' => 'Petite Frite',
            'price' => 2.00,
            'size' => 'Seul',
            'cat' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name' => 'Grande Frite',
            'price' => 2.50,
            'size' => 'Seul',
            'cat' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name' => 'Pain Frite',
            'price' => 2.70,
            'size' => 'Seul',
            'cat' => 'Individuels'
        ]);

        DB::table('products')->insert([
            'name' => 'Cheese Burger',
            'price' => 3.90,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Big Burger',
            'price' => 4.50,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Bicky',
            'price' => 3.50,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Bicky Crispy',
            'price' => 3.90,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Bicky Cheese',
            'price' => 3.90,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken',
            'price' => 4.00,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Veggie Cheddar',
            'price' => 4.30,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Veggie Maroilles',
            'price' => 4.60,
            'size' => 'Seul',
            'cat' => 'Burgers'
        ]);

        DB::table('products')->insert([
            'name' => 'Mayo',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Ketchup',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Andalouse',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Poivre',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Samourai',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Chti',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Pitta',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Algerienne',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Brasil',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);
        DB::table('products')->insert([
            'name' => 'Hannibal',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Burger',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => '3 Sauces',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Cocktail',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Curry',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Americaine',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Moutarde',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Picalili',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Provencale',
            'price' => 0.50,
            'size' => 'Seul',
            'cat' => 'Sauces'
        ]);

        DB::table('products')->insert([
            'name' => 'Nuggets',
            'price' => 5.50,
            'size' => 'Seul',
            'cat' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name' => 'Fricadelle',
            'price' => 5.50,
            'size' => 'Seul',
            'cat' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name' => 'Saucisse',
            'price' => 5.50,
            'size' => 'Seul',
            'cat' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name' => 'Hamburger',
            'price' => 5.50,
            'size' => 'Seul',
            'cat' => 'Menu_Enfant'
        ]);

        DB::table('products')->insert([
            'name' => 'Jupiler',
            'price' => 2.00,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Jupiler 0',
            'price' => 2.00,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Cuvee des troll',
            'price' => 3.00,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Leffe',
            'price' => 3.50,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Triple Karmeliet',
            'price' => 4.20,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Duvel',
            'price' => 4.20,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Chouffe',
            'price' => 4.20,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Kriek',
            'price' => 3.00,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Anosteke',
            'price' => 4.30,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Queue de Charrue',
            'price' => 4.00,
            'size' => 'Seul',
            'cat' => 'Alcool'
        ]);

        DB::table('products')->insert([
            'name' => 'Coca',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Coca Zero',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Fanta Orange',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Fanta Citron',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Orangina',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Oasis Tropical',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Oasis Orange',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Ice Tea',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Caprisun',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Perrier',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Eau Plate (Plastique)',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Eau Gazeuse (Plastique)',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Eau Plate (Verre)',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);

        DB::table('products')->insert([
            'name' => 'Eau Gazeuse (Verre)',
            'price' => 1.50,
            'size' => 'Seul',
            'cat' => 'Soft'
        ]);
    }
}
