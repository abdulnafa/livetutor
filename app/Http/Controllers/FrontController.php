<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orderchat;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Additiondocument;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function BuyNow(){
        return view('buynow');
    }
    public function Signupformdata(Request $request){
       $data=new User();
       $data->email=$request->email;
       $data->name=$request->name;
       $data->password=$request->password;
       $data->countrycode=$request->phonecode;
       $data->phonenumber=$request->phonenumber;


       $data->save();
       
       session(['loginuserid' => $data->id]);
       

       $response = array(
        'status' => true,
        'id' => $data->id,
    );
       return response()->json($response);
    }



    public function signup()
    {
       return view('user.signup');
    }

public function signin()
{
    return view('user.signin');
}


    public function Signinformdata(Request $request){
        $data=User::where("email","=",$request->email)->where("password","=",$request->password)->first();
        
       if($data){

        session(['loginuserid' => $data->id]);
      
        $response = array(
            'status' => true,
            'id' => $data->id,
        );
           return response()->json($response);
       }else{
        return false;
       }

     }

    public function Orderdetail($id)
    {
    
        $doc=Additiondocument::where('userid',Auth::id())->get();
        $order=OrderDetail::where('id',$id)->get();
        $chat=Orderchat::where('sender_id',Auth::id())->get();
       return view('user.orderdetails',compact('order','chat','doc'));
    }

    public function state()
    {
        dd(request());
      $data=request()->query();
      $id=$data['id'];
      $order=$data['order'];
      $success=$data['success'];
      $pending=$data['pending'];
      $hmac=$data['hmac'];
      return view('user.state',compact('id','hmac','order','success','pending'));

    }
    
}
