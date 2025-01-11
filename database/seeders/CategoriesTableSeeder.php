<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => 'Electronics'],
            ['category_name' => 'Books'],
            ['category_name' => 'Clothing'],
            ['category_name' => 'Furniture'],
            ['category_name' => 'Toys'],
            ['category_name' => 'Groceries'],
            ['category_name' => 'Automotive'],
            ['category_name' => 'Sports'],
            ['category_name' => 'Home Appliances'],
            ['category_name' => 'Office Supplies'],
        ]);
    }
}
