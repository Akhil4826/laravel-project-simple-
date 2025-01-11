<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('suppliers')->insert([
            ['supplier_name' => 'Supplier A'],
            ['supplier_name' => 'Supplier B'],
            ['supplier_name' => 'Supplier C'],
            ['supplier_name' => 'Supplier D'],
            ['supplier_name' => 'Supplier E'],
            ['supplier_name' => 'Supplier F'],
            ['supplier_name' => 'Supplier G'],
            ['supplier_name' => 'Supplier H'],
            ['supplier_name' => 'Supplier I'],
            ['supplier_name' => 'Supplier J'],
        ]);
    }
}
