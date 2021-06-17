<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Cat;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Image;
class ProductController extends Controller
{
    public function index(){
        if (Auth::user()->user_role==0) {
            $products = Product::all();
            return view('admin.list', [
                'products' => $products
            ]);
        }
        else{
            return redirect(url('Login'));
        }
    }
    public function home(){
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
        $cart = new Cat($oldCart);
        return view('customer.index',[
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
    public function status($id){
        $status = Product::find($id);
        if ($status->status==0){
            $updateStatus = Product::where('id',$status->id)->update(['status'=>1]);
        }
        else{
            $updateStatus = Product::where('id',$status->id)->update(['status'=>0]);

        }
        return redirect(url('stock'))->with('success','PRODUCT STATUS UPDATED SUCCESSFULLY');
    }
    public function store(Request $request){
        $pictures = new Product();
        $pictures->product_name = $request->input('name');
        $pictures->product_desc = $request->input('desc');
        $pictures->price = $request->input('priceC');
        $pictures->product_price = $request->input('price');
        $pictures->product_category = $request->input('category');
        $pictures->product_category1 = $request->input('category1');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $resize = Image::make($file->getRealPath());
            $resize->resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            });
            $file->move('uploads/product/', $filename);
            $pictures->product_image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Product Added Successfully');

    }
    public function search(Request $request){
        $search = $request->input('searchProduct');
        $searchProducts = Product::where('product_name','like',"%$search%")->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);

        return view('customer.category',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice


        ]);
    }
    public function eProduct(Request $request){
        $edit = Product::find($request->prodId);
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $resize = Image::make($file->getRealPath());
            $resize->resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            });
            $file->move('uploads/product/', $filename);
            $edit->product_image = $filename;
        }
        $edit->product_name = $request->name;
        $edit->product_desc = $request->desc;
        $edit->price = $request->priceC;
        $edit->product_price = $request->input('price');

        $edit->product_category = $request->category;
        $edit->product_category1 = $request->category1;




        $edit->save();

        return redirect(url('stock'))->with('success','Product Updated Successfully');

    }
    public function editProductDetails($id){
        $product = Product::find($id);
        return view('admin.editList',[
            'product'=>$product
        ]);
    }
    public function deleteProduct($id){
        $deleteProduct = Product::find($id);
        $deleteProduct->delete();
        return redirect()->back()->with('success','Product Deleted Successfully');

    }
}
