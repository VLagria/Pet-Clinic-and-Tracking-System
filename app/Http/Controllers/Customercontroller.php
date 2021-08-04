<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Customercontroller extends Controller
{

    public function widgetPets(){
        $widgetPets = DB::table('pets')->get();
        return view('/customer/custhome', compact('widgetPets'));
    }
}
    function getPetID($id_pet){

        $getID=DB::table('pets')->where('pet_id','=',$id_pet)->first();
    
    

        return view('/customer/custhome',compact('getID'));
    }

    function saveType(Request $request,$id_pet){

        DB::table('pets')
        ->where('pet_id',$id_pet)
        ->update([
            'pet_name'=>$request->pet_name
        ]);
        return redirect('/customer/custhome')->with('Success','Successfully Updated!');
}

    function getProfile($user_id){
        $getID = DB::table('user_accounts')->where('user_id','=',$user_id)->first();
        return view('customer/custeditProfile',compact('getID'));
    }
    function saveProfile(Request $request,$user_id){
        DB::table('user_accounts')
        ->where('user_id',$breed_id)
        ->update([
            'user_name'=>$request->user_name,
            'user_password'=>$request->user_password,
            'user_mobile'=>$request->user_mobile,
            'user_email'=>$request->user_email,
        ]);
        return redirect('customer/custProfile')->with('Success','Successfully Updated!');
    }
