<?php

namespace App\Http\Controllers;

use App\Models\Veterinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VeterinaryController extends Controller
{
    function addVeterinarian(Request $request){

        $fname = $request->vet_fname;
        $lname = $request->vet_lname;
        $mname = $request->vet_mname;

        $checkQuery = DB::table('veterinary')->where('vet_fname','=', $fname, 'AND', 'vet_lname','=', $lname, 'AND', 'vet_mname','=', $mname)->first();

        if ($checkQuery) {
            return redirect('/admin/vet/registerVet')->with('existing','The Veterinarian Already Exist');
        }else{

  
            DB::table('user_accounts')->insert([
                'user_id'=>$request->id,
                'user_name'=>$request->user_name,
                'user_password'=>Hash::make($request->user_password),
                'user_mobile'=>$request->user_mobile,
                'user_email'=>$request->user_email,
                'userType_id'=>$request->userType_id
            ]);

            DB::table('veterinary')->insert([
                'vet_fname'=>$request->vet_fname,
                'vet_lname'=>$request->vet_lname,
                'vet_mname'=>$request->vet_mname,
                'vet_mobile'=>$request->vet_mobile,
                'vet_tel'=>$request->vet_tel,
                'vet_birthday'=>$request->vet_birthday,
                'vet_DP'=>$request->vet_DP,
                'vet_blk'=>$request->vet_blk,
                'vet_street'=>$request->vet_street,
                'vet_subdivision'=>$request->vet_subdivision,
                'vet_barangay'=>$request->vet_barangay,
                'vet_city'=>$request->vet_city,
                'clinic_id'=>$request->clinic_id,
                'vet_zip'=>$request->vet_zip,
                'user_id'=>$request->user_id,
                'vet_isActive'=>$request->vet_isActive,
                'vet_dateAdded'=>$request->vet_dateAdded
            ]);
            $id=$request->clinic_id;

    }
       return redirect()->route('clinicvet', ['clinic_id' => $id])->with('newVeterinary','Veterinary has been completely added succesfully');
    }

    function addVetID($clinic_id){
        $userVetID = DB::table('user_accounts')->select('user_id')->orderBy('user_id', 'desc')->first();

        $vetInfo = DB::table('clinic')->where('clinic_id', '=', $clinic_id)->first();

        return view('admin.vet.registerVet', compact('userVetID','vetInfo'));
    }

    function viewVetDetails($clinic_id){
        $vetDetails = DB::table('veterinary')->where('clinic_id','=', $clinic_id) ->get();

        // ('vet_id','vet_fname','vet_lname',
        //     DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay','customer_city','customer_zip', 
        //     DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ', customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        // ->where('user_id', '=', $user_id)
        // ->get();

        return view('admin.vet.viewVetDetails', compact('vetDetails'));
    }
}
   