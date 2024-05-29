<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use App\Models\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
        return view('shop.index', ['products' => $products]);
    }

    public function user()
    {
Auth::user();
        $users = User::all();
        return view('user_master')->with('users', $users);
    }
    public function welcome()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

}
