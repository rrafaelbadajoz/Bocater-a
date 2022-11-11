<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
            'name'=>'Frutas Antonio'
        ]);
        DB::table('providers')->insert([
            'name'=>'Charcutería Mari'
        ]);
        DB::table('providers')->insert([
            'name'=>'Almacenes Cachola'
        ]);
        DB::table('providers')->insert([
            'name'=>'Panadería "El bollo feliz"'
        ]);
        DB::table('providers')->insert([
            'name'=>'Pescadería Manoli'
        ]);
        DB::table('providers')->insert([
            'name'=>'Carnicería Jack the Ripper'
        ]);
    }
}
