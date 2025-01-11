<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product; // Ensure Product model is imported
use App\Models\Category;
use App\Models\Price;
use App\Models\Supplier;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Signup method
    public function signup(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|regex:/^\d{10}$/',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        try {
            // Create the user
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();

            // Return success message as JSON response
            return response()->json(['message' => 'User registered successfully'], 201);
        } catch (\Exception $e) {
            // Log the error and return a generic error message
            Log::error('Error saving user: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred, please try again later.'], 500);
        }
    }
    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {
            // Regenerate session and redirect to the dashboard
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        // Redirect back with an error if login fails
        return back()->withErrors([
            'login_error' => 'Invalid username or password.',
        ])->withInput();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login'); // Redirect to login page after logout
    }
    
    public function showDashboard()
    {
        // a. All products along with their category names and supplier names
        $productsWithCategoryAndSupplier = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.category_id')
            ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
            ->select('products.product_name', 'categories.category_name', 'suppliers.supplier_name')
            ->get();
    
        // b. All products along with their prices, including products that do not have prices
        $productsWithPrices = DB::table('products')
            ->leftJoin('prices', 'products.product_id', '=', 'prices.product_id')
            ->select('products.product_name', 'prices.price')
            ->get();
    
        // c. All products, their category names, supplier names, and their current prices (excluding products without prices)
        $productsWithDetailsAndPrices = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        ->join('prices', 'products.product_id', '=', 'prices.product_id')
        ->select('products.product_name', 'categories.category_name', 'suppliers.supplier_name', 'prices.price')
        ->whereNotNull('prices.price') // Exclude NULL prices
        ->where('prices.price', '>', 0) // Exclude 0 or negative prices
        ->get();
    
    
        // d. Total number of products and average value of products for each supplier
        $supplierStats = DB::table('suppliers')
            ->join('products', 'suppliers.supplier_id', '=', 'products.supplier_id')
            ->leftJoin('prices', 'products.product_id', '=', 'prices.product_id')
            ->select(
                'suppliers.supplier_name',
                DB::raw('COUNT(products.product_id) as total_products'),
                DB::raw('AVG(prices.price) as average_value')
            )
            ->groupBy('suppliers.supplier_name')
            ->get();
    
        return view('dashboard', compact('productsWithCategoryAndSupplier', 'productsWithPrices', 'productsWithDetailsAndPrices', 'supplierStats'));
    }
    
}