<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('prices')->insert([
            ['product_id' => 1, 'price' => 699.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 2, 'price' => 1199.99, 'start_date' => '2024-01-01', 'end_date' => '2024-06-30', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 3, 'price' => 399.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 4, 'price' => 199.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 5, 'price' => 89.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 6, 'price' => 59.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 7, 'price' => 499.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 8, 'price' => 799.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 9, 'price' => 129.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 10, 'price' => 24.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 11, 'price' => 14.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 12, 'price' => 29.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 13, 'price' => 9.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 14, 'price' => 49.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 15, 'price' => 79.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 16, 'price' => 149.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 17, 'price' => 39.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 18, 'price' => 69.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 19, 'price' => 99.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 20, 'price' => 119.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 21, 'price' => 299.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 22, 'price' => 499.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 23, 'price' => 179.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 24, 'price' => 239.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 25, 'price' => 149.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 26, 'price' => 59.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 27, 'price' => 29.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 28, 'price' => 5.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 29, 'price' => 79.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 30, 'price' => 129.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 31, 'price' => 89.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 32, 'price' => 299.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 33, 'price' => 399.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 34, 'price' => 249.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 35, 'price' => 99.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 36, 'price' => 19.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 37, 'price' => 79.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 38, 'price' => 49.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 39, 'price' => 139.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 40, 'price' => 499.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 41, 'price' => 349.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 42, 'price' => 29.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 43, 'price' => 109.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 44, 'price' => 59.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 45, 'price' => 69.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 46, 'price' => 399.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 47, 'price' => 249.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 48, 'price' => 19.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 49, 'price' => 99.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 50, 'price' => 139.99, 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
