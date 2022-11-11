<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name'=>'Tomate ensalada',
            'provider_id'=>1,
        ]);
        DB::table('ingredients')->insert([
            'name'=>'Lechuga bola',
            'provider_id'=>1,
        ]);
        DB::table('ingredients')->insert([
            'name'=>'Pan de chapata',
            'provider_id'=>4,
        ]);
        DB::table('ingredients')->insert([
            'name'=>'Queso cheddar',
            'provider_id'=>2,
        ]);
        DB::table('ingredients')->insert([
            'name'=>'Anillas de calamar',
            'provider_id'=>5,
        ]);
        DB::table('ingredients')->insert([
            'name'=>'Carne de ternera',
            'provider_id'=>6,
        ]);
        DB::table('ingredients')->insert([
            'name'=>'Carne de cerdo',
            'provider_id'=>6,
        ]);
    }
}
