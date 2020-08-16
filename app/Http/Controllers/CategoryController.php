<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.category',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
}
