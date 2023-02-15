<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name" => "Esports"
        ]);
        DB::table('categories')->insert([
            "name" => "Arcade"
        ]);
        DB::table('categories')->insert([
            "name" => "Carreres"
        ]);
        DB::table('categories')->insert([
            "name" => "Acció"
        ]);

    //     $categories = new Category();
    //     $categories->name = "Esports";
    //     $categories->save();
    //     $categories = new Category();
    //     $categories->name = "Arcade";
    //     $categories->save();
    //     $categories = new Category();
    //     $categories->name = "Carreres";
    //     $categories->save();
    //     $categories = new Category();
    //     $categories->name = "Acció";
    //     $categories->save();
    }
}
