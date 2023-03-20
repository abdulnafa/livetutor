<?php

namespace App\Http\Controllers;

use App\Models\Allvalues;
use App\Models\Discipline;
use App\Models\Message;
use App\Models\OrderDetail;
use App\Models\Typeofpaper;
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
        return redirect()->route('adminhome');
        }        else{
            return redirect('/');
        }
    }


 




    // --------------------------------User Controller Function--------------------------------
    public function Userlogindirection(Request $request){

    
        $data=User::where('email','=',$request->email)->where('password','=',$request->password)->where('role','=','user')->first();
        if($data){
            session(['loginuserid' => $data->id]);
            return redirect()->route('userAdmin');
        
        }else{
        return redirect()->back();
    }
    }

//----------------------------------User Controller Funcction End -----------------------------------------




    // ----------------------------Admin DashBoard Controller function ----------------------------


    public function Adminhome(){
        $pendingordernumber=OrderDetail::where('status','=','pending')->get()->count();
        $progressordernumber=OrderDetail::where('status','=','progress')->get()->count();
        $revisionordernumber=OrderDetail::where('status','=','revision')->get()->count();
        $completedordernumber=OrderDetail::where('status','=','completed')->get()->count();
       
        return view('admin.home',compact('pendingordernumber','progressordernumber','revisionordernumber','completedordernumber'));
    }




    public function Allorders(){
        
        $orderdetail=OrderDetail::all();

        return view('admin.allorders',compact('orderdetail'));
    }

    public function Paymentcompletedorder(){
        $orderdetailactive=OrderDetail::where('status','=','active')->get();

        return view('admin.paymentcompletedorders',compact('orderdetailactive'));
    }

// All Formula Values 


public function Allformulavalues(){
    $typeofpaper=Typeofpaper::all();
    $discipline=Discipline::all();
    $values=Allvalues::first();
   
    return view('admin.allvalues',compact('typeofpaper','discipline','values'));
}

public function Adminmessages(){
    return view('admin.messages');
}


// Bids 

public function Bids(){
    $orderdetailactive=OrderDetail::where('status','=','bidding')->get();

        return view('admin.bidding',compact('orderdetailactive'));
}


// Users 

public function Users(){
    $user=User::where('role','=','user')->get()->count();
   

        return view('admin.users',compact('user'));
}



// Type of paper 


public function Opentypeofpaperform(){
    return view('admin.typeofpaper');
}

public function Typeofpaper(Request $request){


$data=new Typeofpaper();

$data->name=$request->name;
$data->save();

return redirect()->route('allformulavalues');


}



// Delete Type of paper value 


public function Deletetypeofpaper($id){
   
    Typeofpaper::where('id','=',$id)->delete();
    return redirect()->route('allformulavalues');

}


// Discipline 


public function Opendisciplineform(){
    return view('admin.discipline');
}


public function Discipline(Request $request){


    $data=new Discipline();
    
    $data->name=$request->name;
    $data->save();
    
    return redirect()->route('allformulavalues');
    
    
    }

public function Deletediscipline($id){
   
    Discipline::where('id','=',$id)->delete();
    return redirect()->route('allformulavalues');

}


// All Values 


public function Allvalues(Request $request){
    if(Allvalues::first()){
       
        $data=Allvalues::first();
        $data->academic1=$request->academic1;
        $data->academic2=$request->academic2;
        $data->academic3=$request->academic3;
        $data->academic4=$request->academic4;
        $data->paperformat1=$request->paperformat1;
        $data->paperformat2=$request->paperformat2;
        $data->paperformat3=$request->paperformat3;
        $data->paperformat4=$request->paperformat4;
        $data->paperformat5=$request->paperformat5;
        $data->sixhours=$request->sixhours;
        $data->twelvehours=$request->twelvehours;
        $data->twentyfourhours=$request->twentyfourhours;
        $data->fortyeighthours=$request->fortyeighthours;
        $data->threedays=$request->threedays;
        $data->fivedays=$request->fivedays;
        $data->sevendays=$request->sevendays;
        $data->standard=$request->standard;
        $data->premimum=$request->premimum;
        $data->platinum=$request->platinum;

        $data->save();

        return redirect()->route('allformulavalues');

    }else{
        $data=new Allvalues();
        $data->academic1=$request->academic1;
        $data->academic2=$request->academic2;
        $data->academic3=$request->academic3;
        $data->academic4=$request->academic4;
        $data->paperformat1=$request->paperformat1;
        $data->paperformat2=$request->paperformat2;
        $data->paperformat3=$request->paperformat3;
        $data->paperformat4=$request->paperformat4;
        $data->paperformat5=$request->paperformat5;
        $data->sixhours=$request->sixhours;
        $data->twelvehours=$request->twelvehours;
        $data->twentyfourhours=$request->twentyfourhours;
        $data->fortyeighthours=$request->fortyeighthours;
        $data->threedays=$request->threedays;
        $data->fivedays=$request->fivedays;
        $data->sevendays=$request->sevendays;
        $data->standard=$request->standard;
        $data->premimum=$request->premimum;
        $data->platinum=$request->platinum;

        $data->save();

        return redirect()->route('allformulavalues');
    }
}



// Admin Sms 

public function Adminsms(){

    $user=User::where('role','=','user')->get();

    return view('admin.sms',compact('user'));
}

public function Sendsmsclient(Request $request){
$data=new Message();
$data->sender_id= $request->session()->get('loginuserid');
$data->receiver_id=$request->smsuser;
$data->message=$request->message;
$data->save();

return redirect()->back();
}

public function Onsitemessage(){
    $data=Message::all();  //Random Right Now
    return view('admin.onsite',compact('data'));
}

public function Adminemail(){

    $user=User::where('role','=','user')->get();

    return view('admin.email',compact('user'));
}


public function Payments(){
    return view('admin.payments');
}





}
