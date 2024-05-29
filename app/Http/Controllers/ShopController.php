<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    public function category($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $products = $category->products;

        return view('shop.category', compact('category', 'products'));
    }
}
