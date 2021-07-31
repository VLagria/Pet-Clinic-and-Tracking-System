<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pet;
use App\Models\User;
use App\Models\user_account;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VeterinariansController extends Controller
{
     
    function getAllCustomer(){
        $customers = DB::table('customers')
        ->select('customer_id','customer_fname','customer_lname', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 
        'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay',
        'customer_city','customer_zip', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')->orderBy('customer_id', 'DESC')
        ->paginate(5);
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
    final function petClassification($customer_id){
        $pet_types = DB::table('pet_types')->get();
        
        $pet_breeds = DB::table('pet_breeds')->get();

        $pet_clinics = DB::table('clinic')->get();

        $custInfo = DB::table('customers')->where('customer_id', '=', $customer_id)->first();

        return view('veterinary.registerpet', compact('custInfo','pet_types','pet_breeds','pet_clinics'));
    }
    public function countData(){
        $countPet = DB::table('pets')->count();
        $countCustomers = DB::table('customers')->count();
        $countClinic = DB::table('clinic')->count();
        return view('veterinary.vethome', compact('countPet','countCustomers','countClinic'));
    }

    final function addCustID(){
        $add_id = DB::table('user_accounts')->select('user_id')->orderBy('user_id', 'desc')->first();
        return view('veterinary.registercustomer', compact('add_id'));
    }
    

    function createAcc(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_password'=>'required',
            'user_mobile'=>'required',
            'user_email'=>'required | email | unique:user_accounts'
        ]);

        DB::table('user_accounts')->insert([
            'user_name'=>$request->user_name,
            'user_password'=>Hash::make($request->user_password),
            'user_mobile'=>$request->user_mobile,
            'user_email'=>$request->user_email,
            'userType_id'=>$request->userType_id
        ]);

        return redirect('veterinary/user')->with('success','Account has been successfully created');

    }
    function editAccount($user_id){
        $accs = DB::table('user_accounts')->where('user_id','=', $user_id)->first();
        return view('veterinary.editaccount', compact('accs'));
    }
    
    function saveAccount(Request $request){

        DB::table('user_accounts')
        ->where('user_id', $request->user_id)
        ->update(array(
            'user_name'=>$request->user_name,
            'user_password'=>$request->user_password,
            'user_mobile'=>$request->user_mobile,
            'user_email'=>$request->user_email
        ));
        
        return redirect('veterinary/user')->with('success','Account has been successfully Updated');
    }
    function deleteAccount($user_id){
        DB::table('user_accounts')->where('user_id', $user_id)->delete();
        return back()->with('delete','account has been deleted sucessfully');
    }
    function userCustomer($user_id){
        $userCust = DB::table('customers')
        ->select('customer_id','customer_fname','customer_lname', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 
        'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay',
        'customer_city','customer_zip', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        ->where('user_id', '=', $user_id)
        ->get();

        return view('veterinary.usercustomer', compact('userCust'));
    }
    function userViewPatient($customer_id){
        $Owners = DB::table('pets')
        ->join('pet_types','pet_types.type_id','=','pets.pet_type_id')
        ->join('pet_breeds','pet_breeds.breed_id','=','pets.pet_breed_id')
        ->join('customers','customers.customer_id','=','pets.customer_id')
        ->join('clinic','clinic.clinic_id','=','pets.clinic_id')
        ->select('pets.pet_id','pets.pet_name','pets.pet_gender','pets.pet_birthday','pets.pet_notes','pets.pet_bloodType','pets.pet_registeredDate', 'pet_types.type_name',
        'pet_breeds.breed_name','pets.pet_isActive','pets.customer_id', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),
        'clinic.clinic_name')
        ->where('pets.customer_id','=', $customer_id)->get();

        return view('veterinary/userviewpatient', compact('Owners'));
    }
    function addCustomer(Request $request){
 
        $request->validate([
            'user_name'=>'required',
            'user_password'=>'required',
            'user_mobile'=>'required',
            'user_email'=>'required | email | unique:user_accounts',
            'customer_fname'=>'required',
            'customer_lname'=>'required',
            'user_id'=>'required | unique:customers,user_id',
            'customer_mname'=>'required',
            'customer_mobile'=>'required',
            'customer_tel'=>'required',
            'customer_gender'=>'required',
            'customer_birthday'=>'required',
            'customer_blk'=>'required',
            'customer_street'=>'required',
            'customer_subdivision'=>'required',
            'customer_barangay'=>'required',
            'customer_city'=>'required',
            'customer_zip'=>'required',
            'isActive'=>'required'
        ]);

        DB::table('user_accounts')->insert([
            'user_id'=>$request->id,
            'user_name'=>$request->user_name,
            'user_password'=>Hash::make($request->user_password),
            'user_mobile'=>$request->user_mobile,
            'user_email'=>$request->user_email,
            'userType_id'=>$request->userType_id
        ]);

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

       return redirect('/veterinary/viewvetcustomer')->with('newCustomer','Customer has been completely added succesfully');
    }
    // public function addGetId(){
    //     $userID = DB::table('user_accounts')->orderBy('user_id', 'desc')->first();
    //     return view('veterinary.registercustomer', compact('userID'));
    // }

   final function editcustomerID($customer_id){
        $cust_id = DB::table('customers')->where('customer_id','=', $customer_id)->first();
        return view('veterinary.usereditcustomer', compact('cust_id'));
   }
   final function veteditcustomerID($customer_id){
    $vetcust_id = DB::table('customers')->where('customer_id','=', $customer_id)->first();
    return view('veterinary.veteditcustomer', compact('vetcust_id'));
}

   final function saveCustomer(Request $request, $customer_id){
    $request->validate([
        'customer_fname'=>'required',
        'customer_lname'=>'required',
        'customer_mname'=>'required',
        'customer_mobile'=>'required',
        'customer_tel'=>'required',
        'customer_gender'=>'required',
        'customer_birthday'=>'required',
        'customer_blk'=>'required',
        'customer_street'=>'required',
        'customer_subdivision'=>'required',
        'customer_barangay'=>'required',
        'customer_city'=>'required',
        'customer_zip'=>'required',
        'isActive'=>'required'
    ]);

    DB::table('customers')
    ->where('customer_id', '=', $customer_id)
    ->update(array(
        'customer_fname'=>$request->customer_fname,
        'customer_lname'=>$request->customer_lname,
        'customer_mname'=>$request->customer_mname,
        'customer_mobile'=>$request->customer_mobile,
        'customer_tel'=>$request->customer_tel,
        'customer_gender'=>$request->customer_gender,
        'customer_birthday'=>$request->customer_birthday,
        'customer_blk'=>$request->customer_blk,
        'customer_street'=>$request->customer_street,
        'customer_subdivision'=>$request->customer_subdivision,
        'customer_barangay'=>$request->customer_barangay,
        'customer_city'=>$request->customer_city,
        'customer_zip'=>$request->customer_zip,
        'customer_isActive'=>$request->isActive
    ));
    
    return redirect('veterinary/viewvetcustomer')->with('success','Customer has been updated successfuly');

   }

    final function editCustomer(Request $request, $customer_id){
        DB::table('customers')
        ->where('customer_id', $customer_id)
        ->update([
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
        ]);
        return back()->with('customer_updated','Customer has been updated successfuly');
    }

    final function viewClinicVets($clinic){
        $clinicVets = DB::table('veterinary')
        ->select('vet_id',DB::raw("CONCAT(vet_fname,' ', vet_lname,' ',vet_mname) AS vet_name"),'vet_mobile','vet_tel','vet_birthday','vet_DP',
        DB::raw("CONCAT(vet_blk,' ', vet_street,' ',vet_subdivision,' ',vet_barangay,' ',vet_city,' ',
        vet_zip) AS vet_address"),'vet_dateAdded','clinic_id','user_id','vet_isActive')
        ->paginate(15);

        return view('veterinary/clinicvet', compact('clinicVets'));
    }
    
    final function addPatients(Request $request){

        $request->validate([
            "pet_name"=>'required',
            "pet_gender"=>'required',
            "pet_birthday"=>'required',
            "pet_notes"=>'required',
            "pet_bloodType"=>'required',
            "pet_registeredDate"=>'required',
            "pet_type_id"=>'required',
            "pet_breed_id"=>'required',
            "pet_isActive"=>'required'

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

        return redirect('/veterinary/viewvetcustomer')->with('newPatients', 'Patient has been added succesfully');

    }
    function getPetID($pet_id){

        $editPet = DB::table('pets')->where('pet_id', '=', $pet_id)->first();
        $getTypePet = DB::table('pet_types')->get();
        $getBreedPet = DB::table('pet_breeds')->get();
        $getClinicPet = DB::table('clinic')->get();
        $getOwnerPet = DB::table('customers')->get();
        
        return view('veterinary.vieweditpatient', compact('editPet', 'getTypePet', 'getBreedPet','getClinicPet','getOwnerPet'));
    }
    function savePet(Request $request, $pet_id){
        $customer_id = DB::table('pets')->select('customer_id')->where('pet_id', '=', $pet_id);
        DB::table('pets')
        ->where('pet_id', $pet_id)
        ->update([
            'pet_name'=>$request->pet_name,
            'pet_gender'=>$request->pet_gender,
            'pet_birthday'=>$request->pet_birthday,
            'pet_notes'=>$request->pet_notes,
            'pet_bloodType'=>$request->pet_bloodType,
            'pet_registeredDate'=>$request->pet_registeredDate,
            'pet_type_id'=>$request->pet_type_id,
            'pet_breed_id'=>$request->pet_breed_id,
            'customer_id'=>$request->customer_id,
            'clinic_id'=>$request->clinic_id,
            'pet_isActive'=>$request->pet_isActive
        ]);

        return redirect('veterinary/viewvetpatient')->with('success','Patients has been updated sucessfully');
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

    final function usersRetrieve(){
        $usersData = DB::table('user_accounts')->where('userType_id','=', '3')->orderBy('user_id', 'DESC')
        ->paginate(5);

        return view('veterinary.user',compact('usersData'));
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

    public function search(Request $request){
        
        $search = $request->get('search');
        $usersData = DB::table('user_accounts')->where('userType_id','=','3', 'AND','user_name', 'like', '%'.$search.'%')->paginate('5');
        return view('veterinary.user', compact('usersData'));
    }

    public function custSearch(Request $request){
        $search = $request->get('custsearch');
        $customers = DB::table('customers')
        ->select('customer_id','customer_fname','customer_lname', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 
        'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay',
        'customer_city','customer_zip', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        -> where('customer_fname', 'like', '%'.$search.'%')->paginate('5');
        return view('veterinary.viewvetcustomer', compact('customers'));
    }
}
