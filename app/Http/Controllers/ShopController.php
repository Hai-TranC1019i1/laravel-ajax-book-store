<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $recommendes = $this->getRecommendes();
        $fewProducts = $this->getFewProducts();
        return view('shop.home',compact("recommendes","fewProducts"));
    }

    public function books()
    {
        $books = Product::paginate(20);
        $recommendes = $this->getRecommendes();
        return view('shop.books', compact('books', 'recommendes'));
    }

    public function show($id)
    {
        $book = Product::findOrFail($id);
        $recommendes = $this->getRecommendes();
        return view('shop.product-page',compact('book','recommendes'));
    }

    public function cart()
    {
        $cart = session()->get('cart');
        return view('shop.shop-cart',compact('cart'));
    }

    public function showCheckOut()
    {   $cart = session()->get('cart');
        return view('shop.check-out', compact('cart'));
    }

    public function checkout(Request $request)
    {
        return back();
    }

    public function showProduct($id)
    {
        $book = Product::findOrFail($id);
        return view('shop.product-page',compact('book'));
    }

    public function getRecommendes()
    {
        return DB::table('products')
                    ->orderByDesc('created_at')
                    ->take(4)->get();
    }

    public function getFewProducts()
    {
        return DB::table('products')
            ->inRandomOrder()
            ->take(10)->get();
    }

    public function profile()
    {
        return view('shop.profile');
    }

    public function search(Request $request)
    {
        $books = Product::where('name', 'like',"%$request->keyword%")->paginate(20);
        $recommendes = $this->getRecommendes();
        return view('shop.books',compact('books','recommendes'));
    }
}
