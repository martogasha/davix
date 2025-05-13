<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Blog;
use App\Cat;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Image;
class InternetOneController extends Controller
{
    public function index(){
        $bests = Product::where('product_category','bestSelling')->inRandomOrder()->get();
        $homes = Product::where('product_category','hardDisk')->get();
        $computers = Product::where('product_category','computer')->get();
        $offices = Product::where('product_category','networking')->get();
        $toners = Product::where('product_category','toner')->get();
        $projectors = Product::where('product_category','projector')->get();
        $printers = Product::where('product_category','printer')->get();
        $cctvs = Product::where('product_category','cctv')->get();
        $hardDisks = Product::where('product_category','hardDisk')->get();

        $sliders = Advert::where('category',1)->get();
        $oldCart = Session::get('cat');
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.indexTwo',[
            'bests'=>$bests,
            'homes'=>$homes,
            'computers'=>$computers,
            'offices'=>$offices,
            'toners'=>$toners,
            'projectors'=>$projectors,
            'cctvs'=>$cctvs,
            'hardDisks'=>$hardDisks,
            'printers'=>$printers,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'sliders'=>$sliders

        ]);
    }
    public function cctv(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.camera',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function maintenance(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.maintenance',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function recovery(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.dataRecovery',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function webDesign(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.webDesign',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function networking(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.networks',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
}
