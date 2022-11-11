<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IngredientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_product')->insert([
            'product_id'=>1, //Bocadillo de calamares
            'ingredient_id'=>3, //Pan de chapata
        ]);
        DB::table('ingredient_product')->insert([
            'product_id'=>1, //Bocadillo de calamares
            'ingredient_id'=>5, //Anillas de calamar
        ]);
        DB::table('ingredient_product')->insert([
            'product_id'=>5, //Hamburguesa de vacuno
            'ingredient_id'=>3, //Pan de chapata
        ]);
        DB::table('ingredient_product')->insert([
            'product_id'=>5, //Hamburguesa de vacuno
            'ingredient_id'=>6, //Carne de ternera
        ]);
        DB::table('ingredient_product')->insert([
            'product_id'=>5, //Hamburguesa de vacuno
            'ingredient_id'=>1, //Tomate ensalada
        ]);


    }
}
