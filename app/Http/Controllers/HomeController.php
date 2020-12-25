<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $products = Product::with(['images', 'price'])->take(8)->get();
        $cats = ['ON' => 'ON', 'MUSCLEADD' => 'MUSCLEADD', 'BPI' => 'BPI', 'MUSCLETECH' => 'MUSCLETECH', 'RAND' => 'RAND'];

        return view('web.website.index', compact('products', 'cats'));
    }
}
