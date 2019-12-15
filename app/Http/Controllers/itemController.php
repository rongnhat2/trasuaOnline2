<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Cart;

class itemController extends Controller
{
    //
	 public function CreateItem(Request $request){

        $image = time() . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $image);

        DB::table('items')->insert([

            'name'              => $request->name,
            'prices' 			=> $request->price,
            'image'             => 'images/'.$image,
            'detail' 			=> $request->detail,
            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        
        return redirect()->Route('getAdminAllItem');
    }
    public function EditItem(Request $request){
        DB::table('items')
            ->where("id", $request->id)
            ->update(   ['name' => $request->name, 
                        'prices' => $request->price, 
                        'detail' => $request->detail]);
        return redirect()->Route('getAdminAllItem');
    }
    public function DeleteItem($id){
        
        DB::table('items')->where('id', '=', $id)->delete();

        return redirect()->Route('getAdminAllItem');
    }



    public function acceptorder($id){
        DB::table('order')
            ->where("id", $id)
            ->update(   ['action' => 'Hoàn Tất']);
        return redirect()->Route('getAdminOrder');
    }
    public function deleteorder($id){
        DB::table('order')
            ->where("id", $id)
            ->update(   ['action' => 'Đã Hủy']);
        return redirect()->Route('getAdminOrder');
    }




    public function getData(Request $request){
        $item    =   DB::table('items')->where('id', '=', $request->id)->first();
        echo $item->prices;
    }





    public function CreateOrderItem(Request $request){

        $item = $request->items;
        $amounts = $request->amounts;
        $prices = $request->prices;
        $amount_prices = $request->amount_prices;

        $id = DB::table('order_inshop')->insertGetId([
            'count_prices'              => $amount_prices,
            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        for ($i=0; $i < count($item); $i++) { 
            DB::table('sub_order_inshop')->insertGetId([
                'order_inshop_id'              => $id,
                'item_id'                      => $item[$i],
                'amount'                      => $amounts[$i],
                'amount_prices'                      => $prices[$i],
            ]);
        }

        return redirect()->Route('getAdminCreateOrderInshop');

    }


   	// C A R T
    public function getAddToCart(Request $req, $id){
        $product    =   DB::table('items')->find($id);
        $oldCart    =   Session('cart') ? Session::get('cart') : null;
        $cart       =   new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getDelItemCart($id){
        $oldCart=Session('cart') ? Session::get('cart') : null;
        $cart= new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) >0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
}
