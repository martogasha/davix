<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
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
    public function all(){
        $searchProducts = Product::all();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.shop',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function computers(){
        $searchProducts = Product::where('product_category','computer')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.computers',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function electronics(){
        $searchProducts = Product::where('product_category','home')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.homeAppliance',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function networking(){
        $searchProducts = Product::where('product_category','networking')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.networking',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function consumer(){
        $searchProducts = Product::where('product_category','consumer')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.consumerElectronics',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function phones(){
        $searchProducts = Product::where('product_category','phone')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.phones',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function printers(){
        $searchProducts = Product::where('product_category','printers')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.printers',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function cctv(){
        $searchProducts = Product::where('product_category','cctv')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.cctv',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function laptops(){
        $searchProducts = Product::where('product_category','laptop')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.laptops',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function storage(){
        $searchProducts = Product::where('product_category','storage')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.storage',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function software(){
        $searchProducts = Product::where('product_category','software')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.software',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }

}