<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with('images')->with('price')->take(8)->get();
        $cats = ['kids' => 'kids', 'nike' => 'nike', 'adidas' => 'adidas', 'men' => 'men', 'women' => 'women'];
        // dd($products);
        return view('web.website.index', compact('products', 'cats'));
    }
}
