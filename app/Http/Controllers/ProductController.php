<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Image;
class ProductController extends Controller
{
    public function index(){
        if (Auth::user()->role==0) {
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
        $homes = Product::where('product_category','home')->get();
        $phones = Product::where('product_category','phone')->get();
        $laptops = Product::where('product_category','laptop')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.index',[
            'homes'=>$homes,
            'phones'=>$phones,
            'laptops'=>$laptops,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice

        ]);
    }

    public function store(Request $request){
        $pictures = new Product();
        $pictures->product_name = $request->input('name');
        $pictures->product_desc = $request->input('desc');
        $pictures->product_price = $request->input('price');
        $pictures->product_category = $request->input('category');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->product_image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Product Added Successfully');

    }
    public function eProduct(Request $request){
        $edit = Product::find($request->prodId);
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $resize = Image::make($file->getRealPath());
            $resize -> resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            });
            $file->move('uploads/product/', $filename);
            $edit->product_image = $filename;
        }
        $edit->product_name = $request->name;
        $edit->product_desc = $request->desc;
        $edit->product_price = $request->input('price');

        $edit->product_category = $request->category;



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
