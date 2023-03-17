<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class SendMessage extends Controller
{
    public function SendMessage(Request $request){
$data=new Message();
$data->sender_id=$request->session()->get('loginuserid');
$data->receiver_id='1';
$data->message=$request['message'];
$data->save();

$alldata=Message::all();
return response()->json($alldata);
    }
}
