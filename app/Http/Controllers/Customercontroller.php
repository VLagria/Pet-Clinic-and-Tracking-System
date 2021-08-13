<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Customercontroller extends Controller
{

    public function widgetPets(){
        $LoggedUserInfo = DB::table('user_accounts')
        ->join('customers','customers.user_id','=', 'user_accounts.user_id')
        ->select('*')
        ->where('user_accounts.user_id','=', session('LoggedUser'))->first();

        $customerid=DB::table('customers')
        ->select('customer_id')
        ->where('user_id','=', session('LoggedUser'))->pluck('customer_id')->first();
        

            $petinfo= DB::table('pets')
            ->select('*')
            ->where('customer_id','=', $customerid) ->get();
            
            return view('customer.custhome',compact('LoggedUserInfo','petinfo'));
           // return dd($widgetPets);
    
          
        // return dd($widgetPets);
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



