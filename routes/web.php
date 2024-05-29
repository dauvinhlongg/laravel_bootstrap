<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;


// Route::get('/', function(){
//     $products = Product::all();
//     return view('welcome', compact('products'));
// })->name('home');


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'user'])->name('user');
Route::get('/products', [HomeController::class, 'product'])->name('products');

Route::resource('/categories',CategoryController::class);
Route::resource('/products',ProductController::class);
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addtocart');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/', [HomeController::class, 'index']);





Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{category}', [ShopController::class, 'category'])->name('shop.category');





Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
