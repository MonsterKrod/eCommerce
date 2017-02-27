<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
  function __construct()
  {
    if (!\Session::has('cart'))
        \Session::put('cart',array());
  }

  public function show(){

      $cart =  \Session::get('cart');
      $total = $this->total();
      return view ('store.cart',compact('cart' , 'total'));
	}

    public function add(Product $product){
        $cart=\Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug]= $product;
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }

    public function delete(Product $product){
        $cart=\Session::get('cart');
        unset ($cart[$product->slug]);
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }

    public function trash()
    {
        session()->forget('cart');
        return redirect()->route('cart-show');
    }

    public function update (Product $product,$quantity){
        $cart=\Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart',$cart);

        return redirect()->route('cart-show');
    }

    public function total()
    {
      $cart=\Session::get('cart');
      $total = 0;
      foreach ($cart as $product) {
        $total += $product->price;
      }
      return $total;
    }
    
    public function OrderDetail()
    {
        if (count(\Session::get('cart'))<=0)
            return redirect()->route('home');
        else{
            $cart=\Session::get('cart');
            $total=$this->total();
            return view ('store.order-detail',compact('cart','total'));
        }
    }
}