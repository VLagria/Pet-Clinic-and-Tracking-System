<?php

namespace App\Http\Controllers;

use App\Models\Veterinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VeterinaryController extends Controller
{
    function admin_AddVeterinarian(Request $request){


        $userVetID = DB::table('user_accounts')->select('user_id')->orderBy('user_id', 'desc')->first();
        
        $id = $request->vet_id;
        $fname = $request->vet_fname;
        $lname = $request->vet_lname;
        $mname = $request->vet_mname;

        $checkQuery = DB::table('veterinary')
        ->where('vet_fname','=', $fname)
        ->where('vet_lname','=', $lname)
        ->where('vet_mname','=', $mname)->first();

        if ($checkQuery) {
            return redirect('/admin/vet/registerVet')->with('existing','The Veterinarian Already Exist');
        }else{

            $request->validate([
                'user_name'=>'required | unique:user_accounts',
                'user_email' => 'required | email | unique:user_accounts',
            ]);
    
           $inCheckQuery = DB::table('user_accounts')->insert([
                'user_name'=>$request->user_name,
                'user_password'=>Hash::make($request->user_password),
                'user_mobile'=>$request->user_mobile,
                'user_email'=>$request->user_email,
                'userType_id'=>$request->userType_id
            ]);

           if($inCheckQuery){
                $getId = DB::table('user_accounts')->select('user_id')->where('user_name','=', $request->user_name)->first();

                if(is_object($getId)){

                    $toArray = (array)$getId;
                    $convert = implode($toArray);

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
                    'user_id'=>$convert,
                    'vet_isActive'=>$request->vet_isActive,
                    'vet_dateAdded'=>$request->vet_dateAdded

                ]);
                    return redirect('/admin/clinic/CRUDclinic/home')->with('newVeterinary','Veterinary has been succesfully added!');
            }
           }
    }
    }

    function admin_AddVetID($clinic_id){
        $userVetID = DB::table('user_accounts')->select('user_id')->orderBy('user_id', 'desc')->first();

        $vetInfo = DB::table('clinic')->where('clinic_id', '=', $clinic_id)->first();

        return view('admin.vet.registerVet', compact('userVetID','vetInfo'));
    }

    function admin_viewVetDetails($clinic_id){
        $vetDetails = DB::table('veterinary')->where('clinic_id','=', $clinic_id) ->get();

        // ('vet_id','vet_fname','vet_lname',
        //     DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay','customer_city','customer_zip', 
        //     DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ', customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        // ->where('user_id', '=', $user_id)
        // ->get();

        return view('admin.vet.viewVetDetails', compact('vetDetails'));
    }

    final function admin_DeleteVets($vet_id){
        DB::table('veterinary')->where('vet_id', $vet_id)->delete();
        return back()->with('vet_deleted','Veterinarian Deleted Succesfully');
    }

    function admin_GetVet($vet_id){
        $vets = DB::table('veterinary')->where('vet_id','=', $vet_id)->first();

        $userVetID = DB::table('user_accounts')->get();

        $vetInfo = DB::table('clinic')->get();

        return view('admin.vet.editVet', compact('vets', 'userVetID', 'vetInfo'));
    }



    function admin_EditVetDetails(Request $request, $vet_id){
        $vet_fname = $request->vet_fname;
        $vet_lname = $request->vet_lname;
        $vet_mname = $request->vet_mname;
        $vet_mobile = $request->vet_mobile;
        $vet_tel = $request->vet_tel;
        $vet_birthday = $request->vet_birthday;
        $vet_DP  = $request->vet_DP;
        $vet_blk = $request->vet_blk;
        $vet_street = $request->vet_street;
        $vet_subdivision = $request->vet_subdivision;
        $vet_barangay = $request->vet_barangay;
        $vet_city = $request->vet_city;
        $vet_zip = $request->vet_zip;
        $vet_dateAdded = $request->vet_dateAdded;
        $vet_isActive = $request->vet_isActive;

        $checkClinicQuery = DB::table('veterinary')
            ->where('vet_fname', '=', $vet_fname)
            ->where('vet_lname', '=', $vet_lname)
            ->where('vet_mname', '=', $vet_mname)
            ->where('vet_mobile', '=', $vet_mobile)
            ->where('vet_tel', '=', $vet_tel)
            ->where('vet_birthday', '=', $vet_birthday)
            ->where('vet_blk', '=', $vet_blk)
            ->where('vet_street', '=', $vet_street)
            ->where('vet_subdivision', '=', $vet_subdivision)
            ->where('vet_barangay', '=', $vet_barangay)
            ->where('vet_city', '=', $vet_city)
            ->where('vet_zip', '=', $vet_zip)
            ->where('vet_dateAdded', '=', $vet_dateAdded)
            ->where('vet_isActive', '=', $vet_isActive)->first();

            if ($checkClinicQuery) {
                return back()->with('fail', 'No changes / all are the same');
            }else{

            DB::table('veterinary')
            ->where('vet_id', $vet_id)
            ->update(array(
                'vet_fname'=>$request->vet_fname,
                'vet_lname'=>$request->vet_lname,
                'vet_mname'=>$request->vet_mname,
                'vet_mobile'=>$request->vet_mobile,
                'vet_tel'=>$request->vet_tel,
                'vet_birthday'=>$request->vet_birthday,
                'vet_blk'=>$request->vet_blk,
                'vet_street'=>$request->vet_street,
                'vet_subdivision'=>$request->vet_subdivision,
                'vet_barangay'=>$request->vet_barangay,
                'vet_city'=>$request->vet_city,
                'vet_zip'=>$request->vet_zip,
                'clinic_id'=>$request->clinic_id,
                'vet_isActive'=>$request->vet_isActive,
        ));
        
        }

            return redirect('/admin/clinic/CRUDclinic/home')->with('vet_updated','Vet has been successfully Updated');
    }






    // function admin_EditVetDetails(Request $request, $vet_id){
    //     $request->validate([
    //             'user_name' => 'required | unique:user_accounts,user_name',
    //             'user_password' => 'required',
    //             'user_mobile' => 'required',
    //             'user_email' => 'required | unique:user_accounts,user_email',
    //             'vet_fname'=>'required',
    //             'vet_lname' => 'required',
    //             'vet_mname' => 'required',
    //             'vet_mobile' => 'required | numeric',
    //             'vet_tel' => 'required',
    //             'vet_birthday' => 'required',
    //             'vet_blk' => 'required',
    //             'vet_street' => 'required',
    //             'vet_subdivision' => 'required',
    //             'vet_barangay' => 'required',
    //             'vet_city' => 'required',
    //             'vet_zip' => 'required',
    //             'vet_isActive' => 'required'
    //         ]);

        
    //         $id=$request->clinic_id;
        
    //     return redirect()->route('clinicvet', ['clinic_id' => $id])->with('vet_updated','Veterinary has been successfully Updated');
    // }

    function admin_GetAllCustomer(){
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

        return view('admin/customer/CRUDcustomers', compact('customers','users','pet_clinics','pet_breeds', 'pet_types'));
    }

    public function customerSearch(Request $request){
        $search = $request->get('custsearch');
        $customers = DB::table('customers')
        ->select('customer_id','customer_fname','customer_lname', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 
        'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay',
        'customer_city','customer_zip', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        -> where('customer_fname', 'like', '%'.$search.'%')->paginate('5');
        return view('admin.customer.CRUDcustomers', compact('customers'));
    }

    final function admin_PatientsOwnerViews($customer_id){
       $PatientOwner = DB::table('pets')
        ->join('pet_types','pet_types.type_id','=','pets.pet_type_id')
        ->join('pet_breeds','pet_breeds.breed_id','=','pets.pet_breed_id')
        ->join('customers','customers.customer_id','=','pets.customer_id')
        ->join('clinic','clinic.clinic_id','=','pets.clinic_id')
        ->select('pets.pet_id','pets.pet_name','pets.pet_gender','pets.pet_birthday','pets.pet_notes','pets.pet_bloodType','pets.pet_registeredDate', 'pet_types.type_name',
        'pet_breeds.breed_name','pets.pet_isActive','pets.customer_id', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name",),DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"),'clinic.clinic_name')
        ->where('pets.customer_id','=', base64_decode($customer_id))->get();

        return view('admin/customer/viewPatient', ['PatientOwner'=>$PatientOwner]);
    }

    final function admin_veteditcustomersID($customer_id){
    $vetcust_id = DB::table('customers')->where('customer_id','=', $customer_id)->first();
    return view('admin.customer.customerEdit', compact('vetcust_id'));
    }

    final function admin_SaveCustomers(Request $request, $customer_id){
    $request->validate([
        'customer_fname'=>'required',
        'customer_lname'=>'required',
        'customer_mname'=>'required',
        'customer_mobile'=>'required|numeric',
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
    
    return redirect('/admin/customer/CRUDcustomers')->with('success','Customer has been updated successfuly');

   }
}
   