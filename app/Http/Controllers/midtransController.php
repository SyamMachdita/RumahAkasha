<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class midtransController extends Controller
{
    public function notification(Requset $request){
        $payload = $request->all();

        Log::info('incoming-midtrans',[
            'payload' => $payload
        ]);

        $orderId = $payload['order_id'];
        $statusCode = $payload['status_code'];
        $grossAmount = $payload['gross_amount'];

        $reqSignature = $payload['signature_key'];

        $signature = hash('sha512', $orderId.$statusCode.$grossAmount.config('services.midtrans.server_key'));

        if($signature != $reqSignature){
            return respons()->json([
                'message' => 'invalid order'
            ], 401);
        }

        $transactionStatus = $payload['transaction_status'];

        $order = Pembayaran::find('$orderId');
        if(!$order){
            return response()->json([
                'message' => 'invalid order'
            ]);
        }

        if($transactionStatus == 'settlement'){
            $order->status = 'PAID';
            $order->save();
        } else if($transactionStatus == 'expire'){
            $order->status = 'EXPIRED';
            $order->save();
        }

        return response()->json(['message'=>'success']);
    }
}
