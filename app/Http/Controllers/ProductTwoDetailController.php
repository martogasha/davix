<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Session;

class ProductTwoDetailController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productTwoDetail',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function show($id){
        $prod = Product::where('id',$id)->first();
        $bests = Product::where('product_category','bestSelling')->inRandomOrder()->get();
        $relateds = Product::where('product_category',$prod->product_category)->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productTwoDetail',[
            'products'=>$cart->item,
            'prod'=>$prod,
            'bests'=>$bests,
            'totalPrice'=>$cart->totalPrice,
            'relateds'=>$relateds
        ]);
    }
}
