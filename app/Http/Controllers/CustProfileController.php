<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CustProfileController extends Controller
{

    
    
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