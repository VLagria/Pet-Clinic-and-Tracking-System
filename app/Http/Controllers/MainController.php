<?php

namespace App\Http\Controllers;

use App\Models\user_account;
use Illuminate\Http\Request;
use App\Models\User_accounts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Hash;



class MainController extends Controller
{
    // <==============================================Login Controller====================================>

    final function recover(){
        return view('auth/recover');
    }
    final function logIn(){
        return view('auth/login');
    }
    final function register(){
        return view('auth/register');
        
    }
    final function adminDashboard(){
        return view('admin/index');
    }
    
    final function adminPet(){
        return view('admin/pets/CRUDpet');
    }
    final function adminClinic(){
        return view('admin/clinic/CRUDclinic');
    }

    final function pettype(){
        return view ('admin/pets/CRUDpettype');
    }

    final function addtype(){
        return view ('admin/pets/CRUDaddtype');
    }

    final function typeEdit(){
        return view('admin/pets/CRUDedittype');
    }
    
    
    final function checkAdmin(Request $request){
        $request->validate([
            'user_email'=>'required',   
            'user_password'=>'required'
        ]);

     
        $userInfo = user_account::where('user_email','=', $request->user_email)->first();

        if (!$userInfo) {
            return back()->with('fail','We do not recognize your email address');
        }else{

                if ($request->user_password == $userInfo->user_password) {
                    
                    if ($userInfo->userType_id == 1) {
                        $request->session()->put('LoggedUser', $userInfo->user_id); //for admin
                        return redirect('admin/index');
                    }elseif ($userInfo->userType_id == 3) {
                        $request->session()->put('LoggedUser', $userInfo->user_id); // for customer
                        return redirect('customer/custhome');
                    }
                    elseif($userInfo->userType_id == 2){
                        $request->session()->put('LoggedUser', $userInfo->user_id); // for veterinary
                        return redirect('veterinary/vethome');
                    }else{
                        return back()->with('fail','Incorrect Password');
                    }
                 
                }else{
                    return back()->with('fail','Incorrect Password');
                }
        }

    }

    final function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');

            return redirect('/auth/login');
        }
    }
    final function adminsDashboard(){
        $data = ['LoggedUserInfo'=>user_account::where('id','=', session('LoggedUser'))->first()];
        return view('admin.index', $data);
    }
    final function vetDashboard(){
        $data = ['LoggedUserInfo'=>user_account::where('id','=', session('LoggedUser'))->first()];
        return view('veterinary.vethome', $data);
    }
    final function userDashboard(){
        $data = ['LoggedUserInfo'=>user_account::where('id','=', session('LoggedUser'))->first()];
        return view('customer.custhome', $data);
    }

    final function registerValidate(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_password'=>'required',
            'user_mobile'=>'required',
            'user_email'=>'required|unique'
        ]);

    }

    // <==============================================Login Controller====================================>


    final function adminCustomer(){
        return view('admin/customer/CRUDcustomers');
    }
    final function adminVet(){
        return view('admin/vet/CRUDvet');
    }

    final function adminUsers(){
        return view('admin/users/CRUDusers');
    }

    final function registerUser(){
        return view('admin/users/registerUser');
    }

    public function addAdminSubmit(Request $request){
        $request->validate([
            'user_name'=>'required | unique:user_accounts',
            'user_password'=>'required',
            'user_mobile'=>'required | numeric ',
            'user_email'=>'required | email | unique:user_accounts'
        ]);
        DB::table('user_accounts')->insert([
            'user_name' => $request->user_name,
            'user_password' => $request->user_password,
            'user_mobile' => $request->user_mobile,
            'user_email' => $request->user_email,
            'userType_id' => $request->userType_id
        ]);
        return back()->with('user_created', 'User Created successfully!');
    }

    public function addClinicSubmit(Request $request){
        $request->validate([
            'clinic_name'=>'required | unique:clinic',
            'owner_name'=>'required',
            'clinic_mobile'=>'required | numeric',
            'clinic_tel'=>'required',
            'clinic_email'=>'required | unique:clinic',
            'clinic_blk'=>'required',
            'clinic_street'=>'required',
            'clinic_barangay'=>'required',
            'clinic_city'=>'required',
            'clinic_zip'=>'required | numeric',
        ]);
        DB::table('clinic')->insert([
            'clinic_name' => $request->clinic_name,
            'owner_name' => $request->owner_name,
            'clinic_mobile' => $request->clinic_mobile,
            'clinic_tel' => $request->clinic_tel,
            'clinic_email' => $request->clinic_email,
            'clinic_blk' => $request->clinic_blk,
            'clinic_street' => $request->clinic_street,
            'clinic_barangay' => $request->clinic_barangay,
            'clinic_city' => $request->clinic_city,
            'clinic_zip' => $request->clinic_zip,
            'clinic_isActive' => $request->clinic_isActive
        ]);
        return back()->with('clinic_created', 'Clinic successfully registered!');
    }

    public function editClinicSubmit(Request $request, $clinic_id){
        DB::table('clinic')
            ->where('clinic_id', '=',$clinic_id)
            ->update(array(
            'clinic_name' => $request->clinic_name,
            'owner_name' => $request->owner_name,
            'clinic_mobile' => $request->clinic_mobile,
            'clinic_tel' => $request->clinic_tel,
            'clinic_email' => $request->clinic_email,
            'clinic_blk' => $request->clinic_blk,
            'clinic_street' => $request->clinic_street,
            'clinic_barangay' => $request->clinic_barangay,
            'clinic_city' => $request->clinic_city,
            'clinic_zip' => $request->clinic_zip,
            'clinic_isActive' => $request->clinic_isActive
        ));
            return redirect('/admin/clinic/CRUDclinic')->with('clinic_updated','Clinic has been successfully Updated');
        }

    public function editUserDetails(Request $request){
        $request->validate([
            'user_name'=>'required | unique:user_accounts',
            'user_password'=>'required',
            'user_mobile'=>'required | numeric ',
            'user_email'=>'required | email | unique:user_accounts'
        ]);

        DB::table('user_accounts')
            ->where('user_id', $request->user_id)
            ->update(array(
            'user_name' => $request -> user_name,
            'user_password' => $request -> user_password,
            'user_mobile' => $request -> user_mobile,
            'user_email' => $request -> user_email,
            'userType_id' => $request -> userType_id
        ));

        // return redirect('/admin/users/CRUDusers/')->with('user_updated', true);
        return redirect('/admin/users/CRUDusers')->with('user_updated','Account has been successfully Updated');
    }

    function getUsers($user_id){
        $users = DB::table('user_accounts')->where('user_id','=', $user_id)->first();
        return view('admin.users.editUser', compact('users'));
    }

    function editClinic($clinic_id){
        $clinics = DB::table('clinic')->where('clinic_id','=', $clinic_id)->first();
        return view('admin.clinic.editClinic', compact('clinics'));
    }

    

    public function getAllUsers(){
        $user_accounts = DB::table('user_accounts')->get();
        return view('admin.users.CRUDusers', compact('user_accounts'));
    }

    public function showUserInfo(){
        $userTypes_name = DB::table('usertypes')
        ->join('user_accounts', 'usertypes.userType_id', '=', 'user_accounts.userType_id')
        ->select('user_accounts.*','usertypes.*')
        ->get();

        $userOptions = DB::table('usertypes')->get();

        return view('admin.users.CRUDusers', compact('userTypes_name','userOptions'));
    }

    public function getAllClinic(){
        $clinic = DB::table('clinic')->get();

        return view('admin.clinic.CRUDclinic', compact('clinic'));
    }

    public function user_details($user_id) {

        return DB::table('user_accounts')->where('user_id',$user_id);
        // return DB::table('user_accounts')::findOrFail($user_id);
    }

    final function deleteUsers($user_id){
        DB::table('user_accounts')->where('user_id', $user_id)->delete();
        return back()->with('user_deleted','user successfully deleted');
    }

    final function deleteCustomer($customer_id){
        DB::table('customers')->where('customer_id', $customer_id)->delete();
        return back()->with('customer_deleted','customer successfully deleted');
    }

    function userCustomerDetails($user_id){
        $userCustomer = DB::table('customers')
        ->select('customer_id','customer_fname','customer_lname',
            DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay','customer_city','customer_zip', 
            DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ', customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        ->where('user_id', '=', $user_id)
        ->get();

        return view('admin.users.viewCustomerDetails', compact('userCustomer'));
    }

    function getUserID($user_id){
        $get_id = DB::table('user_accounts')->where('user_id','=', $user_id)->first();
        return view('admin.users.inputUser', compact('get_id'));
    }
   
   function addCustomer(Request $request){

        $request->validate([
            'customer_fname'=>'required',
            'customer_lname'=>'required'
            // 'customer_mname'=>'required',
            // 'customer_mobile'=>'required',
            // 'customer_tel'=>'required',
            // 'customer_gender'=>'required',
            // 'customer_birthday'=>'required',
            // 'customer_street'=>'required',
            // 'customer_subdivision'=>'required',
            // 'customer_barangay'=>'required',
            // 'customer_city'=>'required',
            // 'customer_zip'=>'required',
            // 'customer_isActive'=>'required'
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
            'user_id'=>$request->id,
            'customer_isActive'=>$request->isActive
        ]);

       return redirect('/admin/users/CRUDusers')->with('newCustomer','Customer has been completely added succesfully');
    }
}


