<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Cart;
use Carbon\Carbon;

class frontController extends Controller
{

	// U S E R
    public function Home(){
        $item = DB::table('items')->get();

        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);

            return view('user.index',[
                'product_cart'=>$cart->items,
                'totalPrice'=>$cart->totalPrice,
                'totalQty'=>$cart->totalQty,
                'item'=>$item]);
        }
        else{
            return view('user.index', compact('item'));
        }
    }
    public function Checkout(){
        $item = DB::table('items')->get();

        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);

            return view('user.checkout',[
                'product_cart'=>$cart->items,
                'totalPrice'=>$cart->totalPrice,
                'totalQty'=>$cart->totalQty,
                'item'=>$item]);
        }
        else{
        	return view('user.checkout');
        }
    }
    public function Sub_Item($id){
        // $item = DB::table('items')->limit(4);
        $item_same = DB::table('items')->limit(8);
        $item = DB::table('items')->get();
        $sub_item = DB::table('items')->where('id', '=', $id)->first();

        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);

            return view('user.sub_item',[
                'product_cart'=>$cart->items,
                'totalPrice'=>$cart->totalPrice,
                'totalQty'=>$cart->totalQty,
                'sub_item'=>$sub_item,
                'item_same'=>$item_same,
                'item'=>$item]);
        }
        else{
            return view('user.sub_item', compact('item', 'sub_item', 'item_same'));
        }
    }

	// A D M I N
    public function getAdminHome(){
        return view('admin.layout');
    }
    public function getAdminAllItem(){
        if (Auth::guard()->user()->key == '1') {
            $item = DB::table('items')->paginate(5);
            return view('admin.allitem', compact('item'));
        }  
    }
    public function getCreateItem(){
        if (Auth::guard()->user()->key == '1') {
            return view('admin.create-item');
        }  
    }
    public function AdminEditItem($id){
        if (Auth::guard()->user()->key == '1') {
            $data = DB::table('items')->where('id', $id)->first();
            return view('admin.edit-item', compact('data'));
        }  
    }

    public function registerAdmin(){
        if (Auth::guard()->user()->key == '1') {
            return view('auth.register');
        }  
    }
    public function listAdmin(){
        if (Auth::guard()->user()->key == '1') {

            $item = DB::table('users')->paginate(5);
            return view('admin.sub_user', compact('item'));
        }  
    }



    public function getAdminOrder(){
        if (Auth::guard()->user()->key == '1' || Auth::guard()->user()->key == '2') {
            $item = DB::table('order')->where('action', 'Đang chờ')->paginate(5);
            return view('admin.order', compact('item'));
        }  
    }
    public function getAdminOrderDetail($id){
        if (Auth::guard()->user()->key == '1' || Auth::guard()->user()->key == '2') {
            $item = DB::table('order_detail')->where('order_id', $id)->join('items', 'order_detail.item_id', '=', 'items.id')->get();
            $total = 0;
            $id = $id;
            foreach ($item as $key => $value) {
                $total = $total + (int) $value->prices * (int) $value->amount;
            }
            return view('admin.order_detail', compact('item', 'total', 'id'));
        }
    }
    public function getAdminHistory(){
        if (Auth::guard()->user()->key == '1' || Auth::guard()->user()->key == '2') {
            $item = DB::table('order')->paginate(5);
            return view('admin.history', compact('item'));
        }
    }



    public function getAdminCreateOrderInshop(){
        if (Auth::guard()->user()->key == '1' || Auth::guard()->user()->key == '3') {
            $item = DB::table('items')->get();
            return view('admin.create_order_inshop', compact('item'));
        }
        
    }
    public function getAdminHistoryCreateOrderInshop(){
        if (Auth::guard()->user()->key == '1' || Auth::guard()->user()->key == '3') {
            $item = DB::table('order_inshop')->paginate(5);
            return view('admin.history_inshop', compact('item'));
        }
    }
    public function getAdminHistoryInshopDetail($id){
        if (Auth::guard()->user()->key == '1' || Auth::guard()->user()->key == '3') {
            $item = DB::table('sub_order_inshop')->where('order_inshop_id', $id)->join('items', 'sub_order_inshop.item_id', '=', 'items.id')->get();
            // dd($item);
            $total = 0;
            $id = $id;
            foreach ($item as $key => $value) {
                $total = $total + (int) $value->prices * (int) $value->amount;
            }
            return view('admin.sub_history_inshop', compact('item', 'total', 'id'));
        }
    }


    public function getstatisticalOrder(){
        $item = DB::table('order_inshop')->paginate(5);

        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);

        $count_prices = DB::table('order')->sum('sum_prices') + DB::table('order_inshop')->sum('count_prices') ;
        $count_order = DB::table('order')->count() + DB::table('order_inshop')->count() ;
        $count_order_accepp = DB::table('order')->where('action', '=', 'Hoàn Tất')->count() + DB::table('order_inshop')->count() ;
        $count_order_remove = DB::table('order')->where('action', '=', 'Đã Hủy')->count();
        $order_inshop = DB::table('order_inshop')->count() ;
        $order_online = DB::table('order')->count() ;
        $count_order_accepp_inshop = DB::table('order_inshop')->count() ;
        $count_order_accepp_online = DB::table('order')->where('action', '=', 'Hoàn Tất')->count();
        $count_prices_inshop = DB::table('order_inshop')->sum('count_prices') ;
        $count_prices_online = DB::table('order')->sum('sum_prices');

        // dd(Carbon::today('Asia/Ho_Chi_Minh')
        $count_prices_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->sum('sum_prices') + DB::table('order_inshop')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->sum('count_prices') ;
        $count_prices_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->sum('sum_prices') + DB::table('order_inshop')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->sum('count_prices') ;
        $count_order_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->count() + DB::table('order_inshop')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->count() ;
        $count_order_accepp_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->where('action', '=', 'Hoàn Tất')->count() + DB::table('order_inshop')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->count() ;
        $count_order_remove_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->where('action', '=', 'Đã Hủy')->count();
        $order_inshop_today = DB::table('order_inshop')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->count() ;
        $order_online_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->count() ;
        $count_order_accepp_inshop_today = DB::table('order_inshop')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->count() ;
        $count_order_accepp_online_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->where('action', '=', 'Hoàn Tất')->count();
        $count_prices_inshop_today = DB::table('order_inshop')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->sum('count_prices') ;
        $count_prices_online_today = DB::table('order')->whereDate('created_at', Carbon::today('Asia/Ho_Chi_Minh'))->sum('sum_prices');


        $count_prices_week = DB::table('order')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('sum_prices') + DB::table('order_inshop')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('count_prices') ;
        $count_order_week = DB::table('order')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count() + DB::table('order_inshop')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count() ;
        $count_order_accepp_week = DB::table('order')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('action', '=', 'Hoàn Tất')->count() + DB::table('order_inshop')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count() ;
        $count_order_remove_week = DB::table('order')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('action', '=', 'Đã Hủy')->count();
        $order_inshop_week = DB::table('order_inshop')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count() ;
        $order_online_week = DB::table('order')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count() ;
        $count_order_accepp_inshop_week = DB::table('order_inshop')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count() ;
        $count_order_accepp_online_week = DB::table('order')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('action', '=', 'Hoàn Tất')->count();
        $count_prices_inshop_week = DB::table('order_inshop')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('count_prices') ;
        $count_prices_online_week = DB::table('order')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('sum_prices');


        // dd($count_prices_week);


        return view('admin.statisticalOrder', compact('item', 
            'count_prices', 
            'count_order', 
            'count_order_accepp', 
            'count_order_remove', 
            'order_inshop', 
            'order_online', 
            'count_order_accepp_inshop', 
            'count_order_accepp_online', 
            'count_prices_inshop', 
            'count_prices_online', 
            'count_prices_today', 
            'count_order_today', 
            'count_order_accepp_today', 
            'count_order_remove_today', 
            'order_inshop_today', 
            'order_online_today', 
            'count_order_accepp_inshop_today', 
            'count_order_accepp_online_today', 
            'count_prices_inshop_today', 
            'count_prices_online_today', 
            'count_prices_week', 
            'count_order_week', 
            'count_order_accepp_week', 
            'count_order_remove_week', 
            'order_inshop_week', 
            'order_online_week', 
            'count_order_accepp_inshop_week', 
            'count_order_accepp_online_week', 
            'count_prices_inshop_week', 
            'count_prices_online_week'

        ));
    }

    public function getstatisticalItem(){
        $sql = 'select *,sum(amount) as total from order_detail INNER JOIN items ON item_id = items.id group by item_id order by total desc';
        $item = DB::select($sql);  
        return view('admin.statisticalItem', compact('item'));
    }

}
