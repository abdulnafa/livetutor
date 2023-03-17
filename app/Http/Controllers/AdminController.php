<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use  App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Logout(Request $request ){
        $request->session()->forget('loginuserid');
        return redirect('/');
    }
    public function AdminLogin(){
        return view('loginform');
    }

    public function Userlogin(){
        return view('userloginform');
    }


    public function Logindirection(Request $request){
        $data=User::where('email','=',$request->email)->where('password','=',$request->password)->where('role','=','admin')->first();
if($data){
    session(['loginuserid' => $data->id]);
    return redirect()->route('adminRedirect');

}else{
return redirect()->back();
}

    }


    public function AdminDashboardRedirect(Request $request){

        if($request->session()->exists('loginuserid')){

            $orderdetail=OrderDetail::all();
            $orderdetailactive=OrderDetail::where('status','=','active')->get();
        return view('admin.dashboard',compact('orderdetail','orderdetailactive'));
        }        else{
            return redirect('/');
        }
    }


    public function Userlogindirection(Request $request){

    
        $data=User::where('email','=',$request->email)->where('password','=',$request->password)->where('role','=','user')->first();
        if($data){
            session(['loginuserid' => $data->id]);
            return redirect()->route('userAdmin');
        
        }else{
        return redirect()->back();
    }
    }
}
