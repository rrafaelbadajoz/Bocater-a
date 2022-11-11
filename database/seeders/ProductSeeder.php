<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Bocadillo de calamares',
            'price'=>'6',
        ]);
        DB::table('products')->insert([
            'name'=>'Bocadillo de panceta',
            'price'=>'6',
        ]);
        DB::table('products')->insert([
            'name'=>'Bocadillo de jamón ibérico',
            'price'=>'6',
        ]);
        DB::table('products')->insert([
            'name'=>'Bocadillo vegetal',
            'price'=>'6',
        ]);
        DB::table('products')->insert([
            'name'=>'Hamburguesa de vacuno',
            'price'=>'7',
        ]);
        DB::table('products')->insert([
            'name'=>'Hamburguesa mixta',
            'price'=>'5.5',
        ]);
    }
}
