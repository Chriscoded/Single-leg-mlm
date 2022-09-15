<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Epin;
use App\Models\Epinrequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpinRequestedController extends Controller
{
    public function epinRequested()
    {    
        if(Auth::check()){
          
        //$epin = DB::table('epins')->where('user_id', session('email'))->paginate(5); //this code is also currect
        $epin = Epin::where('user_id', session('email'))->where('status', 'Open')->paginate(5);

        return view('myepin', ['allepinList' => $epin]);
    }

    return redirect("/")->withSuccess('Login details are not valid');
    }

    public function forAllusersRequest(){
    
        if(Auth::check()){
        $lincome = Epinrequest::paginate(5);
    
        return view('epinRequested', ['empinList' => $lincome]);
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }

        public function sendEpin(Request $request)
        {  
            if(Auth::check()){
            // $pin= rand(0000000000,9999999999);
           // $data=$request->$pin;
           $user_id=$request->input('user_id');
           $status=$request->input('status');
           $pinqty=$request->input('pinqty');
        //    echo $pinqty;die;
   
           $i=1;
               while($i<= $pinqty){

                //lets make sure pin we are inserting is unique

                    $pin = rand(0000000000,9999999999);

                    $checkpin = DB::table('Epins')-> where('pin', $pin)->get();
                    
                    if($checkpin =="[]"){
                        $data = ['referralkey' => $pin];
                        //array_push($data,['referralkey' => $ref] );
                    }
                    else if($checkpin->referralkey != ($pin = rand(0000000000,9999999999))){ 
                        $data = ['referralkey' => $pin];
                        //array_push($data,['referralkey' => $ref1] );
                    }
                    else{
                        $pin = rand(0000000000,9999999999);
                        $data = ['referralkey' => $pin]; 
                        //array_push($data,['referralkey' => $ref] );
                    } 
                  Epin::create([
                       'user_id' => $user_id,
                       'pin' => $pin,
                       'status' => $status
                     ]);
                    $i++;
               }
            //    return redirect('epinRequested');
               
               DB::update('update epinrequests set status = ? where userid = ?',['Close',$user_id]);
   
               return redirect('epinRequested')->withSuccess('Pin Sent Successfully!');
            }

            return redirect("/")->withSuccess('Login details are not valid');
        }
     
}
