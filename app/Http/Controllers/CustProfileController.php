<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CustProfileController extends Controller
{
<<<<<<< HEAD
    function userprofileID(){
=======

    
    final function userprofileID(){
>>>>>>> 4d26316b26b2eda08f0ddbc4235b5c7994f35633
        $getUserinfo = DB::select('select * from user_accounts where user_id = :user_id',['user_id' => 5]);
        return view('customer/custProf',compact('getUserinfo'));
    }
    final function userProfile(){
        $data = ['LoggedUserInfo'=>DB::table('user_accounts')
        ->join('customers','customers.user_id','=', 'user_accounts.user_id')
        ->select('*')
        ->where('user_accounts.user_id','=', session('LoggedUser'))->first()];
        return view('customer.custProfile', $data);

        // return dd($data);
    }
    final function editProfile(){
        $data = ['LoggedUserInfo'=>DB::table('user_accounts')
        ->join('customers','customers.user_id','=', 'user_accounts.user_id')
        ->select('*')
        ->where('user_accounts.user_id','=', session('LoggedUser'))->first()];
        return view('customer.custAcc', $data);
    }
    

    
    }