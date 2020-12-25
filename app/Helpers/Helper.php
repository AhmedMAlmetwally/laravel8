<?php

use App\Models\Product;

if (!function_exists('get_current_currency')) {
    function get_current_currency()
    {
        return trans(config('app.region_currency_array')[session()->get('region')]);
    }
}
if (!function_exists('get_cart_products')) {
    function get_cart_products()
    {
        $cart = session()->get('cart');
        $products = [];
        $total = 0;
        $quantity = 0;
        foreach( $cart AS $cart_item )
        {
            $product = Product::find($cart_item['id']);
            $product->quantity = $cart_item['quantity'];
            $product->total = $cart_item['quantity'] * $product->price->price;
            $products[] = $product;
            $total += $product->quantity * $product->price->price;
            $quantity++;
        }
        return (object) ['items' => $products, 'total' => $total, 'quantity' => $quantity];
    }
}
