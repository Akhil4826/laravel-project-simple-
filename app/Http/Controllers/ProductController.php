<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Price;
use App\Models\Supplier;
class ProductController extends Controller
{
    //


public function getAllProducts()
{
    $products = Product::with(['category', 'supplier', 'price'])->get();
    return response()->json($products);
}

public function getProductDetails()
{
    $products = Product::with(['category', 'supplier'])->get();
    $productsWithPrices = Product::with(['category', 'supplier', 'price'])->get()->filter(function($product) {
        return $product->price != null;
    });
    return response()->json([
        'allProducts' => $products,
        'productsWithPrices' => $productsWithPrices
    ]);
}

public function getTotalProducts()
{
    $suppliers = Supplier::all();
    $totalProducts = [];
    foreach ($suppliers as $supplier) {
        $products = $supplier->products;
        $averagePrice = $products->avg('price.price');
        $totalProducts[] = [
            'supplier_name' => $supplier->supplier_name,
            'total_products' => $products->count(),
            'average_price' => $averagePrice,
        ];
    }
    return response()->json($totalProducts);
}

}
