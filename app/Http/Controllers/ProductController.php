<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('id','DESC')->get();
        return view('product.index')->with(compact('products','categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'slide_url' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        $product = new Product;
        $imageName = time().'.'.request()->slide_url->getClientOriginalExtension();
        request()->slide_url->move(public_path('images'), $imageName);
        $product->title = $data['title'];
        $product->price = $data['price'];
        $product->slide_url =$imageName;
        $product->category_id = $data['category_id'];
        $product->save();

        return redirect()->route('products.index')->with('status','Thêm bài viết thành công!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       
            $product = Product::findOrFail($id);
            return view('products.show', compact('product'));
            return view('products.show')->with('product', $product);


      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('product.edit')->with(compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request -> validate([
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'slide_url' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        $product = Product::find($id);
        $product->title = $data['title'];
        $product->price = $data['price'];
        $product->slide_url = $data['slide_url'];
        $product->category_id = $data['category_id'];
        $product->save();

        return redirect()->route('products.index')->with('status','Cập nhập bài viết thành công!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('status','Xoá bài viết thành công');
    }
}



