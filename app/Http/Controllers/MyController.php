<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store()
    {
        return view('store');
    }
    public function contact()
    {
        return view('contact');
    }
    public function single_product(Product $product)
    {
        return view('product.single', [
            'product' => $product
        ]);
    }
}
