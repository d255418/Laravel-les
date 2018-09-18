<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        /*
         * 1. data ophalen uit database
         * 2. view returnen (done)
         */

        // 1
        $products = Product::all();


        // 2

        return view('products/index')->with('products', $products);
    }
}
