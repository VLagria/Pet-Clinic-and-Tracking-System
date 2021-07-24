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
    final function checkAdmin(Request $request){
        $request->validate([
            'user_email'=>'required',   
            'user_password'=>'required'
        ]);

        $CheckRoleVet = DB::table('user_accounts')->where('userType_id','=', '2');
        $emailCheck = user_account::where('user_email','=', $request->user_email)->first();

        if (!$emailCheck) {
            return back()->with('fail','We do not recognize your email address');
        }else{

                if ($request->user_password == $emailCheck->user_password) {
                    
                    if ($emailCheck->userType_id == 1) {
                        $request->session()->put('LoggedUser', $emailCheck->user_id);
                        return redirect('admin/index');
                    }elseif ($emailCheck->userType_id == 3) {
                        $request->session()->put('LoggedUser', $emailCheck->user_id);
                        return redirect('customer/custhome');
                    }
                    elseif($emailCheck->userType_id == 2){
                        $request->session()->put('LoggedUser', $emailCheck->user_id);
                        return redirect('veterinary/vethome');
                    }else{
                        return back()->with('fail','Incorrect Password');
                    }
                 
                }else{
                    
                }
        }

    }

    final function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');

            return redirect('/auth/login');
        }
    }

    final function registerValidate(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_password'=>'required',
            'user_mobile'=>'required',
            'user_email'=>'required|unique'
        ]);

    }
    final function adminCustomer(){
        return view('admin/customer/CRUDcustomers');
    }
    final function adminVet(){
        return view('admin/vet/CRUDvet');
    }

    final function adminUsers(){
        return view('admin/users/CRUDusers');
    }

    public function addAdminSubmit(Request $request){
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
            'admin_clinic_id' => $request->admin_clinic_id,
            'clinic_isActive' => $request->clinic_isActive
        ]);
        return back()->with('clinic_created');
    }

    public function editClinicSubmit(Request $request, $clinic_id){
        DB::table('clinic')
            ->where('clinic_id', $clinic_id)
            ->update(array(
            'clinic_name' => $request -> clinic_name,
            'owner_name' => $request -> owner_name,
            'clinic_mobile' => $request -> clinic_mobile,
            'clinic_tel' => $request -> clinic_tel,
            'clinic_email' => $request -> clinic_email,
            'clinic_blk' => $request -> clinic_blk,
            'clinic_street' => $request -> clinic_street,
            'clinic_barangay' => $request -> clinic_barangay,
            'clinic_city' => $request -> clinic_city,
            'clinic_zip' => $request -> clinic_zip,
            'admin_clinic_id' => $request -> admin_clinic_id,
            'clinic_isActive' => $request -> clinic_isActive
        ));
            return back()->with('clinic_updated','Clinic successfully updated');
        }

    public function editUserSubmit(Request $request, $user_id){
        DB::table('user_accounts')
            ->where('user_id', $user_id)
            ->update(array(
            'user_name' => $request -> user_name,
            'user_password' => $request -> user_password,
            'user_mobile' => $request -> user_mobile,
            'user_email' => $request -> user_email,
            'userType_id' => $request -> userType_id
        ));

        // return redirect('/admin/users/CRUDusers/')->with('user_updated', true);
        return back()->with('user_updated','user successfully updated');
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
   
}
