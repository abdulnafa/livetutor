<?php

namespace App\Http\Controllers;

use App\Models\Orderchat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderChatController extends Controller
{
   public function getMessage(Request $request)
   {
 $chat= new  Orderchat;
 $chat->orderid=$request->orderid;
 $chat->message =$request->message;
 $chat->recipent=$request->reciever;
 $chat->person=$request->person;
 $chat->sender_id=Auth::id();
$chat->save();
return redirect()->back()->with("success","Your Message send Successfully");
   }
}
