<?php

namespace App\Http\Controllers;

use App\Cat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.Login',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,

        ]);
    }
    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            if ($user->role ==0){
                return redirect(url('admin'));
            }
            else{
                return redirect(url('checkout'));
            }
        }
        else{
            return redirect(url('LoginUser'))->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
        public function register(Request $request){
            $register = User::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'location'=>$request->input('location'),
                'role'=> 1,
                'password' => Hash::make($request['password']),
            ]);
            return redirect(url('Login'))->with('success','Registered Successfully');
        }
}
