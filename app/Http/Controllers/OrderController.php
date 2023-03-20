<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Additiondocument;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function getAdditional(Request $request)
    {
        if ($request->hasfile('image')) {
    $file1 = $request->file('image');
    $extention = $file1->getClientOriginalExtension();
    $filename1 = time() . '.' . $extention;
    $path = public_path() . '/images';
    $file1->move($path, $filename1);

};

       $data=new Additiondocument;
       $data->sender=$request->sender;
       $data->userid=Auth::id();
       $data->orderid=$request->order_id;
       $data->document=$filename1;
       $data->save();
       return redirect()->back()->with("success","document uploaded successfully");
    }

public function editorder($id)
{
   $order= OrderDetail::where('id',$id)->get();
 return view('user.editorder',compact('order'));
}


public function editorderData(Request $request)
{
    $tbl = OrderDetail::where('id',$request->orderid)->FirstOrFail();

if ($request->hasFile('additionalmaterial')) {
    $additionalfilename = time() . $request->file('additionalmaterial')->getClientOriginalName();
    $request->file('additionalmaterial')->storeAs('public/additionalfiles', $additionalfilename);
    $tbl->additional_material = $additionalfilename;
}

$tbl->academic_level = $request['academic'];
$tbl->type_of_paper = $request['typeofpaper'];
$tbl->discipline = $request['disciplien'];
$tbl->topic = $request['topic'];
$tbl->paper_instruction = $request['paperintstruction'];
$tbl->paper_format = $request['format'];
$tbl->number_of_pages = $request['noofpages'];
$tbl->double_or_single = $request['doublesingle'];
$tbl->currency = $request['currency'];
$tbl->sources_to_cited = $request['sourcetobecited'];
$tbl->powerpoint_slides = $request['powerpointslides'];
$tbl->deadline = $request['deadline'];
$tbl->category_package = $request['package'];
$tbl->userid =Auth::id();
$tbl->amount = $request['totalamount'];

$tbl->update();

  return redirect('/userAdmin')->with("success","Order Update Successfully");

}
}