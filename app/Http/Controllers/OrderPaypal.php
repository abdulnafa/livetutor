<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderPaypal extends Controller
{
    public function Orderpaypal(Request $request){
        $tbl=new OrderDetail();



        if($request->hasFile('additionalmaterial')){
            $additionalfilename = time().$request->file('additionalmaterial')->getClientOriginalName();
      $request->file('additionalmaterial')->storeAs('public/additionalfiles',$additionalfilename);
      $tbl->additional_material = $additionalfilename;
        }





        $tbl->academic_level=$request['academic'];
        $tbl->type_of_paper=$request['typeofpaper'];
        $tbl->discipline=$request['disciplien'];
        $tbl->topic=$request['topic'];
        $tbl->paper_instruction=$request['paperintstruction'];
        $tbl->paper_format=$request['format'];
        $tbl->number_of_pages=$request['noofpages'];
        $tbl->double_or_single=$request['doublesingle'];
        $tbl->currency=$request['currency'];
        $tbl->sources_to_cited=$request['sourcetobecited'];
        $tbl->powerpoint_slides=$request['powerpointslides'];
        $tbl->deadline=$request['deadline'];
        $tbl->category_package=$request['package'];
       $tbl->userid=$request->session()->get("loginuserid");
       $tbl->amount=$request['totalamount'];



        $tbl->save();


        return  redirect()->route('userAdmin');

      
    }
}
