<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustProfileController extends Controller
{
 
     function countPet(){
    
        $countPet = DB::table('pets')->count();
        
        return view('/customer/custProfile', compact('countPet'));
    }
    function userprofileID($user_id){
        $userprofile_id = DB::table('user_accounts')->where('user_id','=','$user_id')->first();
        return view('customer/custProf',compact('userprofile_id'));
    }

    function saveUser(Request $request,$user_id){
    $request->validate([
        'user_name'=>'required',
        'user_password'=>'required',
        'user_mobile'=>'required',
        'user_email'=>'required',
        'userType_id'=>'required',
    ]);
    DB:table('user_accounts')->where ('user_id','=',$user_id)
    ->update(array(
        'user_name'=>$request->user_name,
        'user_password'=>$request->user_password,
        'user_mobile'=>$request->user_mobile,
        'user_email'=>$request->user_email,
        'userType_id'=>$request->userType_id,
    ));
    return redirect('customer/custProf')->with('success','User has been updated successfully');
}

}