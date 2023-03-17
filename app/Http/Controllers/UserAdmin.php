<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdmin extends Controller
{
    public function userAdmin(Request $request){
        
        $orderdetail=OrderDetail::where('userid','=',$request->session()->get('loginuserid'))->get();
        $user=User::where('id','=',$request->session()->get('loginuserid'))->get();
        if($request->session()->exists('loginuserid')){
            return view("user.dashboard",compact('orderdetail','user'));
        }else{
            return redirect('/');
        }
        
    }
    public function Updateprofile(Request $request){
        $data=User::where('id','=',$request->session()->get('loginuserid'))->first();
        $data->email=$request->email;
        if($request->password!=''){
            $data->password=$request->password;
        }

        $data->save();
        return redirect()->back();
    }
}
