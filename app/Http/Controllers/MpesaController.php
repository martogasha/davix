<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kopokopo\SDK\K2;
class MpesaController extends Controller
{
    public function stkPush(){
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
            'tillNumber' => '000798',
            'firstName' => 'Jane',
            'lastName' => 'Doe',
            'phoneNumber' => '0726155494',
            'amount' => 1,
            'email' => 'example@example.com',
            'callbackUrl' => 'https://iconztech.com/getPayload',
            'accessToken' => $accessToken,
        ]);
        dd('ok');
    }
    public function subscribe(){
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
        $webhooks = $K2->Webhooks();
        $response = $webhooks->subscribe([
            'eventType' => 'buygoods_transaction_received',
            'url' => 'https://iconztech.com/getPayload',
            'scope' => 'till',
            'scopeReference' => '000798',
            'accessToken' => $accessToken,
        ]);
        $location = $response['location'];
        $stk = $K2->StkService();
        $options = [
            'location' => $location,
            'accessToken' => $accessToken,
        ];
        $response = $stk->getStatus($options);
        dd($response);
    }
    public function getPayload(Request $request){
        $payload = $request->json()->all();
        Log::info($payload);
    }
}
