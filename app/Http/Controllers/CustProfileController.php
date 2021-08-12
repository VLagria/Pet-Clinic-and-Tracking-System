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


    final function userProfile(){
        $data = ['LoggedUserInfo'=>DB::table('user_accounts')
        ->join('customers','customers.user_id','=', 'user_accounts.user_id')
        ->select('*')
        ->where('user_accounts.user_id','=', session('LoggedUser'))->first()];
        return view('customer.custProfile', $data);
    }

    

    
    }