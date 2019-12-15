<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class AdminController extends Controller
{
    //
    public function CreateUser(Request $request){

        $id = DB::table('users')->insertGetId([
            'name'              => $request->name,
            'email' 			=> $request->email,
            'password'          => Hash::make($request->password),
            'key' 				=> $request->key,
            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        return redirect()->Route('listAdmin');
    }
    public function DeleteUser($id){
        
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->Route('listAdmin');
    }
}
