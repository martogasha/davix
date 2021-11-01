<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kopokopo\SDK\K2;
use Safaricom\Mpesa\Mpesa;
use Session;

class   CheckoutController extends Controller
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
        if (Auth::check()){
            $phoneRaw = $request->phone;
            $code = '+254';
            $phoneNumber = $code.''.$phoneRaw;
            $oldCart = Session::get('cat');
            $cart = new Cat($oldCart);
            $checkouts = $cart->item;
            $userPhone = User::where('id', Auth::id())->first();

            if ($request->cash =='mpesa'){

                // Do not hard code these values
                $options = [
                    'clientId' => 'J6IUCHendZ4SbNEAF6WWJZIFcKR2LCmy5hmrlkIVHcU',
                    'clientSecret' => 'IDbzppyG-fXTgClVemBnh2irjcfUG_s8E4AD3xELMO4',
                    'apiKey' => 'a3ee4134cc102a400aef96c3c9d1a635829f54d2',
                    'baseUrl' => 'https://api.kopokopo.com'
                ];
                $K2 = new K2($options);
                $tokens = $K2->TokenService();
                $result = $tokens->getToken();
                $access = $result['data'];
                $accessToken = $access['accessToken'];
                $stk = $K2->StkService();
                $result = $stk->initiateIncomingPayment([
                    'paymentChannel' => 'M-PESA STK Push',
                    'tillNumber' => 'K967143',
                    'firstName' => $request->name,
                    'lastName' => 'Doe',
                    'currency'=>'KES',
                    'phoneNumber' => $phoneNumber,
                    'amount' => $request->amount,
                    'email' => $request->email,
                    'callbackUrl' => 'https://iconztech.com/api/storeWebhooks',
                    'accessToken' => $accessToken,
                ]);
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
