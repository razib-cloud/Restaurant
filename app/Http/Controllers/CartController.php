<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    // Add an item to the cart
    public function add(Request $request)
    {
        $cart = session('cart', []);

        $cart[] = [
            'id' => $request->product_id,
            'name' => $request->product_name,
            'price' => $request->product_price,
            'image' => $request->product_image,
            'quantity' => 1, // Default quantity is 1
        ];

        session(['cart' => $cart]);

        return redirect()->route('cart.index');
    }

    // Display the cart
    // Display the cart
    public function index()
    {
        $cartItems  = session('cart', []); // Retrieve cart items from the session
        $cartTotal = $this->calculateCartTotal($cartItems ); // Calculate cart total

        return view('pages.frontend.cart', compact('cartItems ', 'cartTotal')); // Pass both cartItems and cartTotal to the view
    }



    // Update cart item quantity
    public function update(Request $request)
    {
        $cart = session('cart', []);
        foreach ($cart as &$item) {
            if ($item['id'] == $request->id) {
                if ($request->action == 'increase') {
                    $item['quantity']++;
                } else if ($request->action == 'decrease' && $item['quantity'] > 1) {
                    $item['quantity']--;
                }
            }
        }

        session(['cart' => $cart]);

        return response()->json(['success' => true]);
    }

    // Remove an item from the cart
    public function remove(Request $request)
    {
        $cart = session('cart', []);
        $cart = array_filter($cart, function ($item) use ($request) {
            return $item['id'] != $request->id;
        });

        session(['cart' => $cart]);

        return response()->json(['success' => true]);
    }

    // Calculate the cart total
    private function calculateCartTotal($cartItems )
    {
        $subtotal = 0;
        foreach ($cartItems  as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        return [
            'subtotal' => $subtotal,
            'total' => $subtotal, // You can add taxes or discounts here if needed
        ];
    }
}
