<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Session;

class ProductDetailsController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productDetails',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function show($id){
        $product = Product::where('id',$id)->first();
        $relateds = Product::where('product_category',$product->product_category)->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productDetails',[
            'products'=>$cart->item,
            'product'=>$product,
            'totalPrice'=>$cart->totalPrice,
            'relateds'=>$relateds
        ]);
    }
}
