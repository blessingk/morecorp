<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Bid;
use Auth;

class ProductController extends Controller
{
    public function index() {
      $products = Product::all();
      return view('products.index', [
        'products' => $products
      ]);
    }

    public function create() {
      return view('admin.add_product');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect('dashboard')->withMessage('Product added successfully');
    }

    public function edit($id) {
      $product = Product::FindorFail($id);
      return view('admin.edit_product', [
        'product' => $product
      ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = Product::FindorFail($id);
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect('dashboard')->withMessage('Product updated successfully');
    }

    public function product_info(Request $request, $id) {
      $product = Product::FindorFail($id);
      $product->view_count = $product->view_count+1;
      $product->save();
      $bids = Bid::where('product_id', $id)->get();
      $max = $bids->max('bid_price');
      $min = $bids->min('bid_price');
      $avg = $bids->avg('bid_price');

      $my_bid = Bid::where(['email' => Auth::user()->email, 'product_id' => $id])->first();

      return view('products.info', [
          'product' => $product,
          'max' => $max,
          'min' => $min,
          'my_bid' => $my_bid
      ]);
    }

    public function product_view($id) {
      $product = Product::FindorFail($id);
      $bids = Bid::where('product_id', $id)->get();
      $max = $bids->max('bid_price');
      $min = $bids->min('bid_price');
      $avg = $bids->avg('bid_price');

      return view('admin.product_view', [
          'product' => $product,
          'max' => $max,
          'min' => $min,
         'avg' => $avg,
         'bids' => $bids
      ]);
    }

    public function product_biding(Request $request, $id) {

        $request->validate([
            'email' => 'required|max:255',
            'bid_price' => 'required'
        ]);

        $bid = Bid::where('product_id', $id)->first();
        if($bid) {
            if($bid->email === Auth::user()->email) {
                $bid->bid_price = $request->bid_price;
            }

        } else {
            $bid = new Bid();
            $bid->product_id = $id;
            $bid->bid_price = $request->bid_price;
            $bid->email = $request->email;
        }
        $bid->save();

        return redirect('home')->withMessage('Product bid successfully');
    }

    public function product_bid($id) {

        $product = Product::FindorFail($id);
        return view('products.product_bid', [
          'product' => $product
        ]);
    }

    public function delete($id) {
      $product = Product::FindorFail($id);
      $product->delete();
       return redirect()->back();
    }
}
