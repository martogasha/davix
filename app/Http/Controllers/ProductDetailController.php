<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductDetailController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productDetail',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function show($id){
        $product = Product::where('id',$id)->first();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productDetail',[
            'product'=>$product,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
}
