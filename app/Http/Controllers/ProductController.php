<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

    $products = Product::all(); 
    return view('products', compact('products'));
    }
// Метод получения товара по id
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }
}