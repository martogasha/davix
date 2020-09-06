<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Safaricom\Mpesa\Mpesa;
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
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $checkouts = $cart->item;
        $userPhone = User::where('id', Auth::id())->first();

        if (Auth::check()) {
            if ($request->cash =='mpesa'){

                $token = Mpesa::generateSandBoxToken();
                $user = $request->phone;
                $consNumber = 254;
                $tUser = $consNumber. $user;
                $amount = $cart->totalPrice;
                $shortCode = '174379';
                $timestamp ='20201016213045';
                $passKey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';

                $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
                $password = base64_encode($shortCode.$passKey.$timestamp);
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token)); //setting custom header


                $curl_post_data = array(
                    //Fill in the request parameters with valid values
                    'BusinessShortCode' => '174379',
                    'Password' => $password,
                    'Timestamp' => '20201016213045',
                    'TransactionType' => 'CustomerPayBillOnline',
                    'Amount' =>$amount,
                    'PartyA' => $tUser,
                    'PartyB' => '174379',
                    'PhoneNumber' => $tUser,
                    'CallBackURL' => 'https://kibe.braxlan.com/getPayment',
                    'AccountReference' => 'Davix',
                    'TransactionDesc' => 'davix'
                );

                $data_string = json_encode($curl_post_data);

                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

                $curl_response = curl_exec($curl);
                print_r($curl_response);

                return redirect()->back()->with('success','INPUT PIN');
            }
            else {
                $editUser = User::find($request->userId);
                $editUser->user_name = $request->name;
                if ($request->email) {
                    $editUser->user_email = $request->email;
                }
                $editUser->user_phone = $request->phone;
                $editUser->user_location = $request->location;
                $editUser->save();


                foreach ($checkouts as $checkout) {
                    $phone = $request->phone;
                    $order = new Order();
                    $order->user_id = Auth::id();
                    $order->product_id = $checkout['item']['id'];
                    $order->order_quantity = $checkout['quantity'];
                    $order->order_status = 'cash on delivery';
                    $order->order_status1 = 'Awaiting Confirmation';
                    $order->save();
                }
                $request->session()->forget('cat');

                return redirect(url('success'))->with('success', 'Order Placed Successfully');
            }
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
