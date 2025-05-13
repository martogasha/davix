<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Checkout;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UserSystemInfoHelper;
use Session;

class CartTwoController extends Controller
{
    public function index()
    {
        if (!Session::has('cat')){
            return view('customer.cartTwo');
        }
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.cartTwo', ['products'=>$cart->item,'totalPrice'=>$cart->totalPrice]);
    }

    public function store(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cat') ? Session::get('cat') : null;
        $cart = new Cat($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cat',$cart);
    }
    public function cartOne(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cat') ? Session::get('cat') : null;
        $cart = new Cat($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cat',$cart);
        return redirect()->back()->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function storeOne(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cat') ? Session::get('cat') : null;
        $cart = new Cat($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cat',$cart);
    }
    public function getReduceByOne($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED FROM CART');
    }
    public function addByOne($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->addByOne($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function removeItem($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->removeItem($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED FROM CART');
    }
}
