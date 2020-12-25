<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        if( $product == NULL ) return response()->json(['status' => 'error', 'messgae' => trans('Product not found')]);
        if( $product->available == 0 ) return response()->json(['status' => 'error', 'messgae' => trans('Product is not available')]);

        $new_product = false;

        if( session()->has('cart.' . $product->id) )
        {
            $quantity = session()->get('cart.' . $product->id . '.quantity') + 1;
        }
        else
        {
            $quantity = 1;
            $product->image = asset('uploads/products/' . $product->id . '/' . $product->cover[0]->image);
            $product->title_string = $product->title;
            $product->price_string = $product->price->price;
            $new_product = $product;
        }

        session()->put('cart.' . $product->id, ['id' => $product->id, 'quantity' => $quantity]);

        return response()->json(['status' => 'success', 'messgae' => trans('Product added to cart'), 'cart' => get_cart_products(), 'new_product' => $new_product]);
    }

    public function remove( Request $request )
    {
        session()->forget('cart.' . $request->product_id);
        return response()->json(['status' => 'success', 'messgae' => trans('Product removed from cart successfully'), 'cart' => get_cart_products()]);
    }
}
