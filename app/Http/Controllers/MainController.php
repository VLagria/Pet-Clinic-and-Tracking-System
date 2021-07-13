<?php

namespace App\Http\Controllers;

use App\Models\user_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

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
    final function adminPet(){
        return view('admin/pets/CRUDpet');
    }
    final function adminClinic(){
        return view('admin/clinic/CRUDclinic');
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
    function checkAdmin(Request $request){
        //validate admin
        $CheckRole = user_account::where('userType_id','=','1')->first();

        $request->validate([
            'user_email'=>'required|email',
            'user_password'=>'required|min:5|max:20'
        ]);

        $userInfo = user_account::where('user_email','=', $request->user_email)->first();

        if (!$userInfo) {
            return back()->with('fail','We do not recognize your email address');
        }else{
           
                if (Hash::check($request->user_password, $userInfo->user_password)) {
                    $request->session()->put('LoggedAdmin', $userInfo->user_id);
                  
                        return redirect('admin/index');

                }else{
                    return back()->with('fail','Incorrect Password');
                    
                }
        }
    }
   
}
