<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $user = User::where('id',Auth::id())->first();
        return view('customer.checkout',[
                'products'=>$cart->item,
                'totalPrice'=>$cart->totalPrice,
                'user'=>$user
            ]);
    }
    public function placeOrder(Request $request)
    {
        if (Auth::check()) {
            $editUser = User::find($request->userId);
            $editUser->name = $request->name;
            if ($request->email) {
                $editUser->email = $request->email;
            }
            $editUser->phone = $request->phone;
            $editUser->location = $request->location;
            $editUser->save();

            $oldCart = Session::get('cat');
            $cart = new Cat($oldCart);
            $checkouts = $cart->item;
            foreach ($checkouts as $checkout) {
                $userPhone = User::where('id', Auth::id())->first();
                $phone = $userPhone->phone;;
                $order = new Order();
                $order->user_id = Auth::id();
                $order->product_id = $checkout['item']['id'];
                $order->quantity = $checkout['quantity'];
                $order->order_status = 'cash on delivery';
                $order->order_status1 = 'Awaiting Confirmation';
                $order->save();
            }
            $request->session()->forget('cat');

            return redirect(url('success'))->with('success', 'Order Placed Successfully');
        }
        else{
            return redirect(url('Login'));
        }
    }
    public function success(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.success',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }
}
