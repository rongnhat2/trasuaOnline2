<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Cart;


class userController extends Controller
{
    public function postOrder(Request $request){
        $id = DB::table('order')->insertGetId([
            'username'              => $request->username,
            'address' 			=> $request->address,
            'phone'             => $request->phone,
            'action'             => "Đang chờ",
            'sum_prices'             => $request->sum_prices,
            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
    	for ($i = 0; $i < $request->count; $i++) { 
    		DB::table('order_detail')->insert([
	            'order_id'          => $id,
	            'item_id'           => $request->item[$i],
	            'amount'            => $request->amount[$i],
	            'prices'            => $request->prices[$i],
	        ]); 
    	}
       	Session::flush();
        return redirect()->Route('Home');
    }
}
