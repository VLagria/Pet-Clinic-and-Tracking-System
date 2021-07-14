<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\user_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;

class VeterinariansController extends Controller
{
     
    function getAllCustomer(){
        $customers = DB::table('customers')
        ->select('customer_id', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 
        'customer_gender','customer_birthday', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        ->paginate(15);
        return view('veterinary/viewvetcustomer', ['customers'=>$customers]);
    }

    function retrieveInfo(){

        $petInfoDatas = DB::table('pets')
        ->join('pet_types','pet_types.type_id','=','pets.pet_type_id')
        ->join('pet_breeds','pet_breeds.breed_id','=','pets.pet_breed_id')
        ->join('customers','customers.customer_id','=','pets.customer_id')
        ->join('clinic','clinic.clinic_id','=','pets.clinic_id')
        ->select('pets.pet_id','pets.pet_name','pets.pet_gender','pets.pet_birthday','pets.pet_notes','pets.pet_bloodType','pets.pet_registeredDate', 'pet_types.type_name',
        'pet_breeds.breed_name','pets.pet_isActive', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),
        'clinic.clinic_name')
        ->paginate(10);

        $pet_clinics = DB::table('clinic')->get();

        $pet_customers = DB::table('customers')
        ->select('customer_id', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"))
        ->get();

        $pet_types = DB::table('pet_types')->get();

        $pet_breeds = DB::table('pet_breeds')->get();
        return view('veterinary.viewvetpatient', compact('pet_breeds', 'pet_types', 'pet_customers','pet_clinics','petInfoDatas'));
    }
    public function addPatients(Request $request){

        

        $request->validate([
            'pet_name' => 'required',
            'pet_gender' => 'required',
            'pet_notes' => 'required',
            'pet_bloodType'=>'required',
            'pet_DP'=>'required',
            'pet_registeredDate' => 'required',
            'pet_type_id' => 'required',
            'pet_breed_id' => 'required',
            'customer_id' => 'required',
            'clinic_id' => 'required',
            'pet_isActive'=>'required'
        ]);

        DB::table('pets')->insert([
            'pet_name'=>$request->pet_name,
            'pet_gender'=>$request->pet_gender,
            'pet_birthday'=>$request->pet_birthday,
            'pet_notes'=>$request->pet_notes,
            'pet_bloodType'=>$request->pet_bloodType,
            'pet_DP'=>$request->pet_DP,
            'pet_registeredDate'=>$request->pet_registeredDate,
            'pet_type_id'=>$request->pet_type_id,
            'pet_breed_id'=>$request->pet_breed_id,
            'customer_id'=>$request->customer_id,
            'clinic_id'=>$request->clinic_id,
            'pet_isActive'=>$request->pet_isActive,
            
        ]);
        return back()->with('newPatients', 'Patient has been added succesfully');

    }
    
}
