<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pet;
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
    public function countData(){
        $countPet = DB::table('pets')->count();
        $countCustomers = DB::table('customers')->count();
        $countClinic = DB::table('clinic')->count();
        return view('veterinary.vethome', compact('countPet','countCustomers','countClinic'));
    }
    final function addPatients(Request $request){


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

    final function deletePatients($pet_id){
        DB::table('pets')->where('pet_id', $pet_id)->delete();
        return back()->with('patients_deleted','Patients has been deleted sucessfully');
    }
    
    public function patients_detail($pet_id){
        
        // $getbyID  = DB::table('pets')
        // ->join('pet_types','pet_types.type_id','=','pets.pet_type_id')
        // ->join('pet_breeds','pet_breeds.breed_id','=','pets.pet_breed_id')
        // ->join('customers','customers.customer_id','=','pets.customer_id')
        // ->join('clinic','clinic.clinic_id','=','pets.clinic_id')
        // ->select('pets.pet_id','pets.pet_name','pets.pet_gender','pets.pet_birthday','pets.pet_notes','pets.pet_bloodType','pets.pet_registeredDate', 'pet_types.type_name',
        // 'pet_breeds.breed_name','pets.pet_isActive', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),
        // 'clinic.clinic_name')
        // ->where('pets.pet_id', $pet_id)->first();

        return Pet::findorFail($pet_id);
    }

}
