<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['product_name' => 'Smartphone', 'category_id' => 1, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Laptop', 'category_id' => 1, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Tablet', 'category_id' => 1, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Smartwatch', 'category_id' => 1, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Bluetooth Speaker', 'category_id' => 1, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Headphones', 'category_id' => 1, 'supplier_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Camera', 'category_id' => 1, 'supplier_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Television', 'category_id' => 1, 'supplier_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'E-Book Reader', 'category_id' => 2, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Novel', 'category_id' => 2, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Cookbook', 'category_id' => 2, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Children\'s Book', 'category_id' => 2, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Graphic Novel', 'category_id' => 2, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Jacket', 'category_id' => 3, 'supplier_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Jeans', 'category_id' => 3, 'supplier_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'T-Shirt', 'category_id' => 3, 'supplier_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Dress', 'category_id' => 3, 'supplier_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Winter Coat', 'category_id' => 3, 'supplier_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Dining Table', 'category_id' => 4, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Sofa', 'category_id' => 4, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Office Chair', 'category_id' => 4, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Bed Frame', 'category_id' => 4, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Bookshelf', 'category_id' => 4, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Teddy Bear', 'category_id' => 5, 'supplier_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Action Figure', 'category_id' => 5, 'supplier_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Board Game', 'category_id' => 5, 'supplier_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Puzzle', 'category_id' => 5, 'supplier_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Dollhouse', 'category_id' => 5, 'supplier_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Organic Apples', 'category_id' => 6, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Bread', 'category_id' => 6, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Milk', 'category_id' => 6, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Eggs', 'category_id' => 6, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Chicken Breast', 'category_id' => 6, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Car Battery', 'category_id' => 7, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Motor Oil', 'category_id' => 7, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Air Filter', 'category_id' => 7, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Tire', 'category_id' => 7, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Wiper Blades', 'category_id' => 7, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Tennis Racket', 'category_id' => 8, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Soccer Ball', 'category_id' => 8, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Golf Clubs', 'category_id' => 8, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Yoga Mat', 'category_id' => 8, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Dumbbells', 'category_id' => 8, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Refrigerator', 'category_id' => 9, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Microwave Oven', 'category_id' => 9, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Washing Machine', 'category_id' => 9, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Vacuum Cleaner', 'category_id' => 9, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Blender', 'category_id' => 9, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Printer', 'category_id' => 10, 'supplier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Office Desk', 'category_id' => 10, 'supplier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Notebooks', 'category_id' => 10, 'supplier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'Pens', 'category_id' => 10, 'supplier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_name' => 'File Cabinet', 'category_id' => 10, 'supplier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
