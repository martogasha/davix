<?php

namespace App\Http\Controllers;

use App\Cat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class DashController extends Controller
{
    public function index(){
        $user = User::where('id',Auth::id())->first();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.dashboard',[
            'user'=>$user,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }
    public function store(Request $request){
        $editUser = User::find($request->userId);
        $editUser->name = $request->name;
        $editUser->email = $request->email;
        $editUser->phone = $request->phone;
        $editUser->location = $request->location;
        $editUser->password = Hash::make($request->password);
        $editUser->save();

        return redirect()->back()->with('success','Details Updated Successfully');


    }
}
