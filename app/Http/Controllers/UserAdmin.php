<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAdmin extends Controller
{
    public function userAdmin(Request $request){
        //Home
$pen = OrderDetail::where('userid', Auth::id())->where('payment_status', 'pending')->get();
$pennum = OrderDetail::where('userid', Auth::id())->where('payment_status', 'pending')->count();
$inpro=OrderDetail::where('userid', '=', Auth::id())->where('status','pending')->get();
$inpronum=OrderDetail::where('userid', '=', Auth::id())->where('status','pending')->count();
$rev=OrderDetail::where('userid', '=', Auth::id())->where('status','revision')->get();
$revnum=OrderDetail::where('userid', '=', Auth::id())->where('status','revision')->count();
$com=OrderDetail::where('userid', '=', Auth::id())->where('status','complete')->get();
$comnum=OrderDetail::where('userid', '=', Auth::id())->where('status','complete')->count();

// End Home

        $orderdetail=OrderDetail::where('userid','=',Auth::id())->get();
        $user=User::where('id','=',Auth::id())->get();
      
        if(Auth::check()){
            return view("user.dashboard",compact('orderdetail','user','pennum','pen','inpro','inpronum','rev','revnum','com','comnum'));
        }else{
            return redirect('/');
        }
        
    }
    public function Updateprofile(Request $request){
        $data=User::where('id','=',Auth::id())->first();
        $data->email=$request->email;
        if($request->password!=''){
            $data->password=$request->password;
        }

        $data->save();
        return redirect()->back();
    }
}
