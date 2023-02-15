<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "categoriesId" => 1,
            "name" => "Joc #1",
            "price" => 9.95,
            "description" => "Descripció de Joc #1",
            "image" => "",
            "stock" => 10
        ]);
    }
}
