<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function show(Category $category)
    {
        $products = Product::where('id', $category->id)->get();
        return view('home.products_category', compact('products', 'category'));
    }
}

