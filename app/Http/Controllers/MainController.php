<?php

namespace App\Http\Controllers;

use App\Models\user_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    final function logIn(){
        return view('auth/login');
    }
    final function register(){
        return view('auth/register');
    }
    final function adminDashboard(){
        return view('admin/index');
    }
    final function checkAdmin(){
        return view('auth/login');
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
        return back()->with('user_created');
    }

    public function editUserSubmit(Request $request){
        DB::table('user_accounts')->insert([
            'user_name' => $request->user_name,
            'user_password' => $request->user_password,
            'user_mobile' => $request->user_mobile,
            'user_email' => $request->user_email,
            'userType_id' => $request->userType_id
        ]);
        return back()->with('user_edited');
    }

    public function showUserTypes(){
        

        return view('admin.users.CRUDusers', compact('userOptions'));
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

    public function delete($id){
        DB::table('user_accounts')->where('id',$id)->delete();
        return redirect()->back()->with('success');
    }
   
}
