<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    
}
