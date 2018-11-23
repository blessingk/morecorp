<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      return view('products.index', [
        'products' => $products
      ]);
    }

    public function dashboard()
    {
      $products = Product::all();
      return view('admin.dashboard', [
        'products' => $products
      ]);
    }

    public function login()
    {
        return view('auth.login');
    }
}
