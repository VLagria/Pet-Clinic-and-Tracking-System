<?php

namespace App\Http\Controllers;

use App\Models\user_account;
use Illuminate\Http\Request;
use App\Models\User_accounts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Hash;
use Doctrine\DBAL\Schema\Index;
use Doctrine\DBAL\Types\StringType;
use UxWeb\SweetAlert\SweetAlert;



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
        return view('admin/index/home');
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
                        return redirect('customer/custProfile');
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

    final function registerCust(Request $request){
        $fname = $request->customer_fname;
        $lname = $request->customer_lname;
        $mname = $request->customer_mname;

        $request->validate([
            'user_name'=>'required',
            'user_password'=>'required',
            'user_mobile'=>'required',
            'user_email'=>'required|unique:user_accounts'
        ]);

        $checkcust = DB::table('customers')
        ->where('customer_fname','=', $fname)
        ->where('customer_lname','=', $lname)
        ->where('customer_mname','=', $mname)->first();

         //QUERY FOR CHECKING IF THE CUSTOMER IS ALREADY REGISTERED

        if ($checkcust) {
            return back()->with('error','The customer is Already Exist');
        }else{        
            $type = 3;
            $insAccQuery = DB::table('user_accounts')->insert([
                'user_name'=>$request->user_name,
                'user_password'=>$request->user_password,
                'user_mobile'=>$request->user_mobile,
                'user_email'=>$request->user_email,
                'userType_id'=>$type
            ]);
            //INSERT QUERY FOR ACCOUNTS


            if ($insAccQuery) { //IF THE INSERT ACCOUNT SUCCESS
                
                $getid = DB::table('user_accounts')->select('user_id')->where('user_email','=', $request->user_email)->first();
                //GET ID BY USING UNIQUE ATTRIBUTES
               
                if (is_object($getid)) {
                    
                    $toArray = (array)$getid; //CONVERT OBJECT INTO ARRAY
                    $convert = implode($toArray); // CONVERT ARRAY INTO STRING


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
                        'user_id'=>$convert ,
                        'customer_isActive'=>$request->isActive
                    ]);
                    return redirect('/auth/login')->with('success','Your account is successfully registered');
                   
                }
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

    final function vetProfile(){
        $data = ['LoggedUserInfo'=>DB::table('user_accounts')
        ->join('veterinary','veterinary.user_id','=', 'user_accounts.user_id')
        ->select('*')
        ->where('user_accounts.user_id','=', session('LoggedUser'))->first()];
        return view('veterinary.profilevet', $data);
    }

    final function editProfile(){
        $data = ['LoggedUserInfo'=>DB::table('user_accounts')
        ->join('veterinary','veterinary.user_id','=', 'user_accounts.user_id')
        ->select('*')
        ->where('user_accounts.user_id','=', session('LoggedUser'))->first()];
        return view('veterinary.editprofile', $data);
    }

    final function getVetClinic(){

        $data = ['LoggedUserInfo'=>DB::table('user_accounts')
        ->join('veterinary','veterinary.user_id','=', 'user_accounts.user_id')
        ->select('*')
        ->where('user_accounts.user_id','=', session('LoggedUser'))->first()];

        return view('customer.custhome', $data);

    }

    final function registerValidate(Request $request){
        
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

        alert()->success('Welcome, Admin!', 'Account Created');
        return redirect('/admin/users/CRUDusers')->with('user_created', 'User Created successfully!');
    }

    public function admin_AddClinicSubmit(Request $request){
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
            'clinic_zip'=>'required | numeric'
        ]);
        DB::table('clinic')->insert([
            'clinic_name' => ucwords($request->clinic_name),
            'owner_name' => ucwords($request->owner_name),
            'clinic_mobile' => $request->clinic_mobile,
            'clinic_tel' => $request->clinic_tel,
            'clinic_email' => $request->clinic_email,
            'clinic_blk' => ucwords($request->clinic_blk),
            'clinic_street' => ucwords($request->clinic_street),
            'clinic_barangay' => ucwords($request->clinic_barangay),
            'clinic_city' => ucwords($request->clinic_city),
            'clinic_zip' => ucwords($request->clinic_zip),
            'clinic_isActive' => $request->clinic_isActive
        ]);
        alert()->success('Clinic successfully registered!', 'Clinic Created!');
        return redirect('/admin/clinic/CRUDclinic/home');
    }

    public function admin_EditClinicSubmit(Request $request, $clinic_id){
        $clic_name = $request->clinic_name;
        $owner_name = $request->owner_name;
        $clinic_mobile = $request->clinic_mobile;
        $clinic_tel = $request->clinic_tel;
        $clinic_email = $request->clinic_email;
        $clinic_blk = $request->clinic_blk;
        $clinic_street = $request->clinic_street;
        $clinic_barangay = $request->clinic_barangay;
        $clinic_city = $request->clinic_city;
        $clinic_zip = $request->clinic_zip;
        $clinic_isActive = $request->clinic_isActive;

        $checkClinicQuery = DB::table('clinic')
            ->where('clinic_name', '=', $clic_name)
            ->where('owner_name', '=', $owner_name)
            ->where('clinic_mobile', '=', $clinic_mobile)
            ->where('clinic_tel', '=', $clinic_tel)
            ->where('clinic_email', '=', $clinic_email)
            ->where('clinic_blk', '=', $clinic_blk)
            ->where('clinic_street', '=', $clinic_street)
            ->where('clinic_barangay', '=', $clinic_barangay)
            ->where('clinic_city', '=', $clinic_city)
            ->where('clinic_zip', '=', $clinic_zip)
            ->where('clinic_isActive', '=', $clinic_isActive)->first();

            if ($checkClinicQuery) {
                alert()->warning('No changes / all are the same', 'Fail');
                return redirect('/admin/clinic/CRUDclinic/home');
            }else{
                DB::table('clinic')
            ->where('clinic_id', '=', $clinic_id)
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

        alert()->success('Clinic has been successfully Updated','Clinic Updated!');
        return redirect('/admin/clinic/CRUDclinic/home');
        }
    }

    public function editUserDetails(Request $request){
        $username = $request->user_name;
        $password = $request->user_password;
        $mobile = $request->user_mobile;
        $email = $request->user_email;

        $checkQuery = DB::table('user_accounts')
                ->where('user_name','=', $username)
                ->where('user_password','=', $password)
                ->where('user_mobile','=', $mobile)
                ->where('user_email','=', $email)->first();
        if ($checkQuery) {
            return back()->with('fail', 'No changes / all are the same');
        }else{

        DB::table('user_accounts')
            ->where('user_id', $request->user_id)
            ->update(array(
            'user_name' => $request -> user_name,
            'user_password' => $request -> user_password,
            'user_mobile' => $request -> user_mobile,
            'user_email' => $request -> user_email
        ));
    }
        // return redirect('/admin/users/CRUDusers/')->with('user_updated', true);

        alert()->success('Account Successfully Updated!', 'Updated!');
        return redirect('/admin/users/CRUDusers');
    }

    function admin_GetUsers($user_id){
        $users = DB::table('user_accounts')->where('user_id','=', $user_id)->first();

        $userOptions = DB::table('usertypes')->get();

        return view('admin.users.editUser', compact('users','userOptions'));
    }

    function admin_EditClinic($clinic_id){
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
        ->paginate(10);

        $userOptions = DB::table('usertypes')->get();

        return view('admin.users.CRUDusers', compact('userTypes_name','userOptions'));
    }

    function getAllClinic(){
        $getClinicInfo = DB::table('clinic')->get();
        return view('admin.clinic.CRUDclinic', compact('getClinicInfo'));
    }

    public function user_details($user_id) {

        return DB::table('user_accounts')->where('user_id',$user_id);
        // return DB::table('user_accounts')::findOrFail($user_id);
    }

    final function admin_DeleteUsers($user_id){
        $getType = DB::table('user_accounts')->where('user_id', $user_id)->pluck('userType_id')->first();
        $custID = DB::table('customers')->where('user_id', $user_id)->pluck('customer_id')->first();
        $custQuery = DB::table('pets')->where('customer_id', $custID)->first();
        $countAdmin = DB::table('user_accounts')->select(DB::raw('COUNT(*) as count'))->where('userType_id', 1)->pluck('count')->first();
        $deleteVet = DB::table('veterinary')->where('user_id', $user_id)->delete();

        if ($custQuery) {
            alert()->warning('Customer Has Pets!', 'Cannot Delete');
            return back();
        }else{
            if ($getType = 3) {
                DB::table('customers')->where('user_id', $user_id)->delete();
                DB::table('user_accounts')->where('user_id', $user_id)->delete();
            }elseif($getType = 2){
                if($deleteVet == true){
                    DB::table('user_accounts')->where('user_id', $user_id)->delete();
                }
            }else{
                if ($countAdmin>1) {
                    DB::table('user_accounts')->where('user_id', $user_id)->delete();
                }else{
                    return back()->with('deleteFail2','Need 1 Administrator.');
                }
            }
        }
                alert()->error('Delete Account', 'Account Successfully Deleted');
                return back();
            }

    final function admin_DeleteCustomer2($customer_id){ 
            $getUserID = DB::table('customers')->where('customer_id', $customer_id)->pluck('user_id')->first();
            $getType = DB::table('user_accounts')->where('user_id', $getUserID)->pluck('userType_id')->first();
            $custID = DB::table('customers')->where('user_id', $getUserID)->pluck('customer_id')->first();
            $custQuery = DB::table('pets')->where('customer_id', $custID)->first();
            $countAdmin = DB::table('user_accounts')->select(DB::raw('COUNT(*) as count'))->where('userType_id', 1)->pluck('count')->first();
            $deleteVet = DB::table('veterinary')->where('user_id', $getUserID)->delete();

            if ($custQuery) {
                return back()->with('deleteFail', 'Customer has pets. Cannot be deleted.');
            }else{
                if ($getType = 3) {
                    DB::table('customers')->where('user_id', $getUserID)->delete();
                    DB::table('user_accounts')->where('user_id', $getUserID)->delete();
                    return back()->with('cust_deleted','Customer Successfully Deleted');
                }elseif($getType = 2){
                    if($deleteVet == true){
                        DB::table('user_accounts')->where('user_id', $getUserID)->delete();
                    }
                }else{
                    if ($countAdmin>1) {
                        DB::table('user_accounts')->where('user_id', $getUserID)->delete();
                    }else{
                        return back()->with('deleteFail2','Need 1 Administrator.');
                    }
                }
            }
                    
                    return back()->with('user_deleted','user successfully deleted');
                }
        
    final function deleteClinic($clinic_id){
        $clinicQuery2 = DB::table('pets')->where('clinic_id', $clinic_id)->first();
        $clinicID = DB::table('veterinary')->where('clinic_id', $clinic_id)->pluck('clinic_id')->first();
        $clinicQuery = DB::table('veterinary')->where('clinic_id', $clinicID)->first();

        if($clinicQuery || $clinicQuery2){
            alert()->error('Clinic contains veterinarians/pets. Empty Clinic First! ', 'Deletion Failed!');
            return back();
        }else{
            DB::table('clinic')->where('clinic_id', $clinic_id)->delete();
            alert()->warning('clinic successfully deleted!','Clinic Deleted!');
            return back();
        }
    }

    final function admin_DeleteCustomer($customer_id){
        DB::table('customers')->where('customer_id', $customer_id)->delete();
        return back()->with('customer_deleted','customer successfully deleted');
    }

    

    function admin_UserCustomerDetails($user_id){
        $userCustomer = DB::table('customers')
        ->select('customer_id','customer_fname','customer_lname',
            DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 'customer_gender','customer_DP','customer_birthday','customer_blk','customer_street','customer_subdivision','customer_barangay','customer_city','customer_zip', 
            DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ', customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        ->where('user_id', '=', $user_id)
        ->get();

        return view('admin.users.viewCustomerDetails', compact('userCustomer'));
    }

    function getAllCustomers(){
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
    public function admin_CountData(){
        $countVeterinarians = DB::table('veterinary')->count();
        $countPet = DB::table('pets')->count();
        $countCustomers = DB::table('customers')->count();
        $countClinic = DB::table('clinic')->count();

        return view('/admin/index', compact('countVeterinarians','countPet','countCustomers','countClinic'));
    }

    public function userSearch(Request $request){
        
        $search = $request->get('userSearch');
        $userTypes_name = DB::table('usertypes')
        ->join('user_accounts', 'usertypes.userType_id', '=', 'user_accounts.userType_id')
        ->select('user_accounts.*','usertypes.*')->where('user_name', 'LIKE', '%'.$search.'%')->paginate('5');
        return view('admin/users/CRUDusers', compact('userTypes_name'));
    }


    public function clinicSearch(Request $request){
        $search = $request->get('clinicSearch');
        $getClinicInfo = DB::table('clinic')->select('*')->where('clinic_name', 'LIKE', '%'.$search.'%')->paginate('5');
        return view('admin/clinic/CRUDclinic', compact('getClinicInfo'));
    }

    function getAllVet(){
        $admin_Veterinary = DB::table('veterinary')
        ->join('clinic', 'veterinary.clinic_id', '=', 'clinic.clinic_id')
        ->join('user_accounts', 'veterinary.user_id', '=','user_accounts.user_id')
        ->select('veterinary.*', 'clinic.*', 'user_accounts.*', DB::raw("CONCAT(vet_blk,'/', vet_street,'/', vet_subdivision,'/', vet_barangay,' ',vet_city,' ', vet_zip) AS vet_address"))->paginate(5);
        //inner join clinic

        $pet_clinics = DB::table('clinic')->get();

        $users = DB::table('user_accounts')->where('userType_id','=','3')->get();

        $pet_types = DB::table('pet_types')->get();

        $pet_breeds = DB::table('pet_breeds')->get();

        $pet_clinics = DB::table('clinic')->get();

        

        return view('admin/vet/CRUDvet', compact('admin_Veterinary','users','pet_clinics','pet_breeds', 'pet_types'));
    }

    public function petTypeSearch(Request $request){
        $search = $request->get('petTypeSearch');
        $typePet = DB::table('pet_types')->select('*')->where('type_name', 'LIKE', '%'.$search.'%')->paginate('8');
        return view('admin/pets/CRUDpettype', compact('typePet'));
    }

    public function petSearch(Request $request){
        $search = $request->get('petSearch');
        $Pet = DB::table('pets')->select('*')->where('pet_name', 'LIKE', '%'.$search.'%')->paginate('8');
        return view('admin/pets/CRUDpet', compact('Pet'));
    }

    public function vetSearch(Request $request){
        $search = $request->get('vetSearch');
        $admin_Veterinary = DB::table('veterinary')->select('*')->where('vet_name', 'LIKE', '%'.$search.'%')->paginate('8');
        return view('/admin/vet/CRUDvet/home', compact('admin_Veterinary'));
    }

    public function breedSearch(Request $request){
        $search = $request->get('breedSearch');
        $typeBreed = DB::table('pet_breeds')->select('*')->where('breed_name', 'LIKE', '%'.$search.'%')->paginate('5');
        return view('admin/pets/CRUDpetbreed', compact('typeBreed'));
    }

    function pet_getPetID($pet_id){
        $pluckID = DB::table('pets')->where('pet_id', $pet_id)->pluck('customer_id')->first();
        $getCustID = DB::table('customers')->where('customer_id','=', $pluckID)->first();
        $editPet = DB::table('pets')->where('pet_id', '=', $pet_id)->first();
        $getTypePet = DB::table('pet_types')->get();
        $getBreedPet = DB::table('pet_breeds')->get();
        $getClinicPet = DB::table('clinic')->get();
        $getOwnerPet = DB::table('customers')->get();
        
        return view('admin.pets.CRUDeditpet', compact('editPet', 'getTypePet', 'getBreedPet','getClinicPet','getOwnerPet', 'getCustID'));
    }

    function pet_savePetVet(Request $request, $pet_id){

        $breed = $request->pet_breed_id;
        $gender = $request->pet_gender;
        $birthday = $request->pet_birthday;
        $notes = $request->pet_notes;
        $bloodtype = $request->pet_bloodType;
        $regDate = $request->pet_registeredDate;
        $type = $request->pet_type_id;
        $name = $request->pet_name;
        $customer = $request->customer_id;
        $clinic = $request->clinic_id;
        $status = $request->pet_isActive;


        $NoActionQuery = DB::table('pets')
        ->where('pet_name','=', $request->pet_name)
        ->where('pet_gender','=', $request->pet_gender)
        ->where('pet_birthday','=', $request->pet_birthday)
        ->where('pet_notes','=', $request->pet_notes)
        ->where('pet_bloodType','=', $request->pet_bloodType)
        ->where('pet_registeredDate','=',$request->pet_registeredDate)
        ->where('pet_type_id','=', $request->pet_type_id)
        ->where('pet_breed_id','=', $request->pet_breed_id)
        ->where('customer_id', '=', $request->customer_id)
        ->where('clinic_id','=', $request->clinic_id)
        ->where('pet_isActive','=', $request->pet_isActive)->first();


        if ($NoActionQuery) {
            return back()->with('PetEditFail','No editing happened. Change something to edit.');
        }else{
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

        return redirect('/admin/pets/CRUDpet')->with('pet_updated','Pet has been successfully Updated');
        }

    }

    
}


