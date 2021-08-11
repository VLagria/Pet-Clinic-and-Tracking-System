<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustProfileController extends Controller
{

 
    function userprofileID(){
        $getUserinfo = DB::select('select * from user_accounts where user_id = :user_id',['user_id' => 5]);
        return view('customer/custProf',compact('getUserinfo'));
    }
//    
    
    }