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
//    function edit() {
//         if (Auth:: user()){
//             $user = User::find(Auth::user()->user_id);

//             if ($user ) {

//             return view ('customer/custProfile')->withUser($user);
//             } else {
//                 return redirect()->back();
//             }
//         }
//     }
