<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pet;
use App\Models\User;
use App\Models\user_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VeterinariansController extends Controller
{
     
    function getAllCustomer(){
        $customers = DB::table('customers')
        ->select('customer_id','customer_fname','customer_lname', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 
        'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay',
        'customer_city','customer_zip', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        ->paginate(15);
        $pet_clinics = DB::table('clinic')->get();

        $users = DB::table('user_accounts')->where('userType_id','=','3')->get();

        $pet_types = DB::table('pet_types')->get();

        $pet_breeds = DB::table('pet_breeds')->get();

        $pet_clinics = DB::table('clinic')->get();



        return view('veterinary/viewvetcustomer', compact('customers','users','pet_clinics','pet_breeds', 'pet_types'));
    }

    function veterinariesInfo(){
        
        $veterinaries = DB::table('veterinary')
        ->join('clinic','clinic.clinic_id','=','veterinary.vet_id')
        ->select('veterinary.vet_id', DB::raw("CONCAT(vet_fname,' ', vet_lname) AS vet_name"),
        'veterinary.vet_mobile','veterinary.vet_tel','veterinary.vet_birthday','veterinary.vet_DP', DB::raw("CONCAT(vet_blk, ' ', vet_street,' ',vet_subdivision,' ',vet_barangay,' ',
        vet_city,' ',vet_zip) AS vet_address"),'veterinary.vet_dateAdded','clinic.clinic_name','veterinary.vet_isActive')
        ->paginate(10);

        return view('veterinary/viewvet', ['veterinaries'=>$veterinaries]);
    }

    function clinicInfo(){
        $clinics = DB::table('clinic')
        ->select('clinic_id','clinic_name','owner_name','clinic_mobile','clinic_email','clinic_tel',
        DB::raw("CONCAT(clinic_blk,' ', clinic_street,' ',clinic_barangay,' ',clinic_city,' ',
        clinic_zip) AS clinic_address"),'clinic_isActive')
        ->paginate(15);

        return view('veterinary.viewvetclinic',['clinics'=>$clinics]);
    }

    function retrieveInfo(){
        $petInfoDatas = DB::table('pets')
        ->join('pet_types','pet_types.type_id','=','pets.pet_type_id')
        ->join('pet_breeds','pet_breeds.breed_id','=','pets.pet_breed_id')
        ->join('customers','customers.customer_id','=','pets.customer_id')
        ->join('clinic','clinic.clinic_id','=','pets.clinic_id')
        ->select('pets.pet_id','pets.pet_name','pets.pet_type_id', 'pets.pet_breed_id','pets.pet_gender','pets.pet_birthday','pets.pet_notes','pets.pet_bloodType','pets.pet_registeredDate', 'pet_types.type_name',
        'pet_breeds.breed_name','pets.pet_isActive', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),
        'clinic.clinic_name', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"))
        ->paginate(10);

        $pet_customers = DB::table('customers')
        ->select('customer_id', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"))
        ->get();

        $pet_types = DB::table('pet_types')->get();
        
        $pet_breeds = DB::table('pet_breeds')->get();

        $pet_clinics = DB::table('clinic')->get();

        return view('veterinary.viewvetpatient', compact('pet_customers','petInfoDatas','pet_types','pet_breeds','pet_clinics'));
    }
    public function countData(){
        $countPet = DB::table('pets')->count();
        $countCustomers = DB::table('customers')->count();
        $countClinic = DB::table('clinic')->count();
        return view('veterinary.vethome', compact('countPet','countCustomers','countClinic'));
    }

    function addCustomer(Request $request){

  
        DB::table('customers')->insert([
            'customer_fname'=>$request->customer_fname,
            'customer_lname'=>$request->customer_lname,
            'customer_mname'=>$request->customer_mname,
            'customer_mobile'=>$request->customer_mobile,
            'customer_tel'=>$request->customer_tel,
            'customer_gender'=>$request->customer_gender,
            'customer_birthday'=>$request->customer_birthday,
            'customer_DP'=>$request->customer_DP,
            'customer_blk'=>$request->customer_blk,
            'customer_street'=>$request->customer_street,
            'customer_subdivision'=>$request->customer_subdivision,
            'customer_barangay'=>$request->customer_barangay,
            'customer_city'=>$request->customer_city,
            'customer_zip'=>$request->customer_zip,
            'user_id'=>$request->user_id,
            'customer_isActive'=>$request->isActive
        ]);

        return back()->with('newCustomer','Customer has been completely added succesfully');
    }

    final function editCustomer(Request $request, $customer_id){
        DB::table('customers')
        ->where('customer_id', $customer_id)
        ->update(array(
            'customer_fname'=>$request->customer_fname,
            'customer_lname'=>$request->customer_lname,
            'customer_mobile'=>$request->customer_mobile,
            'customer_tel'=>$request->customer_tel,
            'customer_gender'=>$request->customer_gender,
            'customer_birthday'=>$request->customer_birthday,
            'customer_blk'=>$request->customer_blk,
            'customer_street'=>$request->customer_street,
            'customer_subdivision'=>$request->customer_subdivision,
            'customer_city'=>$request->customer_city,
            'customer_zip'=>$request->customer_zip,
        ));
        return back()->with('customer_updated','Customer has been updated successfuly');
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

    final function deleteCustomers($customer_id){
        DB::table('customers')->where('customer_id', $customer_id)->delete();
        return back()->with('customer_deleted','Customer has been deleted succesfully');
    }
    
    final function patientsOwnerView($customer_id){
       $PatientOwner = DB::table('pets')
        ->join('pet_types','pet_types.type_id','=','pets.pet_type_id')
        ->join('pet_breeds','pet_breeds.breed_id','=','pets.pet_breed_id')
        ->join('customers','customers.customer_id','=','pets.customer_id')
        ->join('clinic','clinic.clinic_id','=','pets.clinic_id')
        ->select('pets.pet_id','pets.pet_name','pets.pet_gender','pets.pet_birthday','pets.pet_notes','pets.pet_bloodType','pets.pet_registeredDate', 'pet_types.type_name',
        'pet_breeds.breed_name','pets.pet_isActive','pets.customer_id', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),
        'clinic.clinic_name')
        ->where('pets.customer_id','=', $customer_id)->get();

        return view('veterinary/viewpatient', ['PatientOwner'=>$PatientOwner]);
    }

    final function QRcode($pet_id){


        $QrCodeDatas= DB::table('pets')
        ->join('pet_types','pet_types.type_id','=','pets.pet_type_id')
        ->join('pet_breeds','pet_breeds.breed_id','=','pets.pet_breed_id')
        ->join('customers','customers.customer_id','=','pets.customer_id')
        ->join('clinic','clinic.clinic_id','=','pets.clinic_id')
        ->select('pets.pet_id','pets.pet_name','pets.pet_type_id', 'pets.pet_breed_id','pets.pet_gender','pets.pet_birthday','pets.pet_notes','pets.pet_bloodType','pets.pet_registeredDate', 'pet_types.type_name',
        'pet_breeds.breed_name','pets.pet_isActive', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),
        'clinic.clinic_name', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"))
        ->where('pet_id','=', $pet_id)
        ->first();


        return view('veterinary.qrcode', compact('QrCodeDatas'));
    

    }

}
