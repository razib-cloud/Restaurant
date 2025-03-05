<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import Product Model

class ShopController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::paginate(8);

        // Pass products to the Blade view
        return view('pages.frontend.shop', compact('products'));
        return view('pages.frontend.cart', compact('products'));
        return view('pages.frontend.checkout', compact('products'));
    }
}
