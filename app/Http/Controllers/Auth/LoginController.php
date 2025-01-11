<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function authenticated(Request $request, $user)
{
    return redirect()->route('dashboard');  // Assuming you have a named route for dashboard
}
public function showDashboard()
{
    // Fetching data for all products, categories, and suppliers
    $productsWithCategoryAndSupplier = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        ->select('products.product_name', 'categories.category_name', 'suppliers.supplier_name')
        ->get();

    // Fetching data for all products with their prices
    $productsWithPrices = DB::table('products')
        ->leftJoin('prices', 'products.product_id', '=', 'prices.product_id')
        ->select('products.product_name', 'prices.price')
        ->get();

    // Fetching data for products with their category names, supplier names, and current prices
    $productsWithCategorySupplierAndPrices = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        ->join('prices', 'products.product_id', '=', 'prices.product_id')
        ->whereNull('prices.end_date')
        ->orWhere('prices.end_date', '>', now())
        ->select('products.product_name', 'categories.category_name', 'suppliers.supplier_name', 'prices.price')
        ->get();

    // Fetching total number of products and average price for each supplier
    $supplierStats = DB::table('suppliers')
        ->join('products', 'suppliers.supplier_id', '=', 'products.supplier_id')
        ->leftJoin('prices', 'products.product_id', '=', 'prices.product_id')
        ->select('suppliers.supplier_name', DB::raw('COUNT(products.product_id) as total_products'), DB::raw('AVG(prices.price) as avg_price'))
        ->groupBy('suppliers.supplier_id')
        ->get();

    return view('dashboard', [
        'productsWithCategoryAndSupplier' => $productsWithCategoryAndSupplier,
        'productsWithPrices' => $productsWithPrices,
        'productsWithCategorySupplierAndPrices' => $productsWithCategorySupplierAndPrices,
        'supplierStats' => $supplierStats,
    ]);
}

}
