<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\VeterinariansController;
use App\Http\Controllers\PetTypeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VeterinaryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
Route::post('/auth/registerValidate', [MainController::class, 'registerValidate'])->name('auth.registerValidate');
Route::get('/auth/recover', [MainController::class, 'recover'])->name('auth.recover');
Route::post('/auth/checkAdmin', [MainController::class, 'checkAdmin'])->name('auth.checkAdmin');
Route::post('/auth/registerAcc', [RegisterController::class, 'registerUser'])->name('auth.registerUser');






Route::group(['middleware'=>['AuthCheck']], function(){



Route::get('/auth/login', [MainController::class, 'logIn'])->name('auth.login');

Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');

Route::get('/admin/pets/CRUDpettype', [MainController::class, 'pettype']);
Route::get('/admin/pets/CRUDaddtype', [MainController::class, 'addtype']);

Route::get('/admin/index', [MainController::class, 'adminDashboard']);
Route::get('/admin/pets/CRUDpet', [MainController::class, 'adminPet']);
Route::get('/admin/customer/CRUDcustomers', [MainController::class, 'adminCustomer']);
Route::get('/admin/vet/CRUDvet', [MainController::class, 'adminVet']);
Route::get('/admin/users/CRUDusers', [MainController::class, 'adminUsers']);
Route::get('/admin/users/CRUDusers', [MainController::class, 'showUserTypes']);
Route::get('/admin/users/CRUDusers/user_details/{user_id}', 'App\Http\Controllers\MainController@user_details');
Route::get('/admin/users/CRUDusers/delete/{user_id}',[MainController::class, 'deleteUsers'])->name('post.deleteusers');

Route::get('/admin/users/viewCustomerDetails/delete/{customer_id}',[MainController::class, 'deleteCustomer'])->name('cust.deletecustomer');


Route::get('customer/contactus',function(){
    return view('customer/contactus');
});


Route::get('customer/createCust', function () {
    return view('customer/createCust');
});

Route::get('customer/custhome',function() {
    return view ('customer/custhome');
});
Route::get('customer/custprofile',function() {
    return view ('customer/custprofile');
});
Route::get('customer/custpet',function() {
    return view ('customer/custpet');
});
Route::get('customer/custVet',function() {
    return view ('customer/custVet');
});
Route::get('customer/home',function() {
    return view('customer/home');
});
Route::get('/admin/clinic/CRUDclinic', function () {
    return view('admin/clinic/CRUDclinic');
});
Route::get('/admin/index', function () {
    return view('/admin/index');
});

Route::get('/admin/customer/CRUDcustomers', function () {
    return view('admin/customer/CRUDcustomers');
});

Route::get('admin/pets/CRUDpet', function () {
    return view('admin/pets/CRUDpet');
});

Route::get('admin/vet/CRUDvet', function () {
    return view('admin/vet/CRUDvet');
});
Route::get('veterinary/user',function(){
    return view('veterinary/user');
});






Route::get('veterinary/addaccount',function(){
    return view('veterinary/addaccount');
});
Route::get('veterinary/editaccount',function(){
    return view('veterinary/editaccount');
});

Route::post('/veterinary/addaccount',[VeterinariansController::class, 'createAcc'])->name('vet.addaccount');

Route::get('/veterinary/editaccount/',[VeterinariansController::class, 'editAccount'])->name('vet.editaccount');




Route::post('/veterinary/editaccount/save',[VeterinariansController::class, 'saveAccount'])->name('vet.saveaccount');

Route::get('/veterinary/user/delete/{user_id}',[VeterinariansController::class, 'deleteAccount'])->name('vet.deleteaccount');

Route::get('/veterinary/usercustomer/{user_id}',[VeterinariansController::class, 'userCustomer'])->name('vet.usercustomer');

Route::get('veterinary/registercustomer',function(){
    return view('veterinary/registercustomer');
});
Route::get('/veterinary/registercustomer', [VeterinariansController::class, 'addCustID']);
Route::get('veterinary/usercustomer',function(){
    return view('veterinary/usercustomer');
});
Route::get('veterinary/userviewpatient',function(){
    return view('veterinary/userviewpatient');
});
Route::get('veterinary/usereditpatient',function(){
    return view('veterinary/usereditpatient');
});
Route::get('veterinary/veteditcustomer',function(){
    return view('veterinary/veteditcustomer');
});
Route::get('veterinary/registerpet',function(){
    return view('veterinary/registerpet');
});

Route::get('veterinary/vieweditpatient',function(){
    return view('veterinary/vieweditpatient');
});

Route::get('/veterinary/vieweditpatient/{pet_id}',[VeterinariansController::class, 'getPetID']);
Route::post('/veterinary/vieweditpatient-save/{pet_id}',[VeterinariansController::class, 'savePet']);


// Route::get('/veterinary/registerpet/{customer_id}', [VeterinariansController::class, 'getCustID']);

Route::get('/veterinary/registerpet/{customer_id}',[VeterinariansController::class, 'petClassification']);

Route::get('/veterinary/veteditcustomer/{customer_id}',[VeterinariansController::class, 'veteditcustomerID']);

Route::get('/veterinary/usereditcustomer/{customer_id}',[VeterinariansController::class, 'editcustomerID']);

Route::post('/veterinary/save_customer/{customer_id}',[VeterinariansController::class, 'saveCustomer'])->name('vet.savecust');

Route::get('/veterinary/user',[VeterinariansController::class, 'usersRetrieve']);

Route::get('/search',[VeterinariansController::class, 'search'])->name('vet.usersearch');
Route::get('/custsearch',[VeterinariansController::class, 'custSearch'])->name('vet.custsearch');


Route::post('/veterinary/registercustomer', [VeterinariansController::class, 'addCustomer'])->name('vet.addcustomer');
Route::get('/veterinary/viewvetcustomer',[VeterinariansController::class, 'getAllCustomer'])->name('vet.getallcustomer');
Route::get('/veterinary/viewvetpatient',[VeterinariansController::class, 'retrieveInfo'])->name('vet.retrieveInfo');
Route::post('/veterinary/viewvetpatient',[VeterinariansController::class, 'addPatients'])->name('vet.addpatient');
Route::post('/veterinary/delete-viewvetpatient/{pet_id}',[VeterinariansController::class, 'deletePatients'])->name('vet.deletepatients');
// Route::get('patients_detail/{pet_id}',[VeterinariansController::class, 'patients_detail']);
// Route::post('/veterinary/registercustomer/{user_id}', [VeterinariansController::class, 'addCustomer'])->name('cust.vetaddcustomer');
Route::post('/veterinary/edit-viewvetcustomer/{customer_id}', [VeterinariansController::class, 'editCustomer'])->name('vet.editcust');
Route::get('/veterinary/delete-viewvetcustomer/{customer_id}',[VeterinariansController::class, 'deleteCustomers'])->name('vet.deletecustomers');


Route::get('veterinary/viewpatient', function () {
    return view('veterinary/viewpatient');
});
Route::get('/veterinary/viewpatient/{customer_id}',[VeterinariansController::class, 'patientsOwnerView'])->name('custownerpatient');
Route::get('/veterinary/userviewpatient/{customer_id}',[VeterinariansController::class, 'userViewPatient']);
Route::get('veterinary/clinicvet', function () {
    return view('veterinary/clinicvet');
});
Route::get('/veterinary/clinicvet/{clinic_id}',[VeterinariansController::class, 'viewClinicVets']);



Route::get('veterinary/qrcode', function () {
    return view('veterinary/qrcode');
});
Route::get('/veterinary/qrcode/{pet_id}',[VeterinariansController::class, 'QRcode'])->name('vet.qrcode');

Route::get('veterinary/vethome', function () {
    return view('veterinary/vethome');
});
Route::get('/veterinary/vethome',[VeterinariansController::class, 'countData']);

Route::get('veterinary/vetpatient',function() {
    return view('veterinary/vetpatient');
});

Route::get('veterinary/vetclinic',function() {
    return view('veterinary/vetclinic');
});
Route::get('veterinary/petregistration',function() {
    return view('veterinary/petregistration');
});
Route::get('/veterinary/viewvetclinic', [VeterinariansController:: class, 'clinicInfo']);

// Route::get('veterinary/viewvetclinic',function() {
//     return view('veterinary/viewvetclinic');
// });

Route::get('/veterinary/viewvet', [VeterinariansController::class, 'veterinariesInfo']);


// Route::get('veterinary/viewvet',function() {
//     return view('veterinary/viewvet');
// });


Route::get('veterinary/vetcustomer',function() {
    return view('veterinary/vetcustomer');
});
// Route::get('veterinary/viewvetcustomer',function() {
//     return view('veterinary/viewvetcustomer');
// });
Route::get('veterinary/assignvet',function() {
    return view('veterinary/assignvet');
});

Route::get('admin/users/registerUser',function() {
    return view('admin/users/registerUser');
});

Route::get('admin/clinic/registerClinic',function() {
    return view('admin/clinic/registerClinic');
});

Route::get('admin/users/editUser',function() {
    return view('admin/users/editUser');
});

Route::post('/admin/users/registerUser',[MainController::class,'addAdminSubmit'])->name('post.addadminsubmit');

Route::get('/veterinary/editaccount/{user_id}',[VeterinariansController::class, 'editAccount'])->name('vet.editaccount');


Route::post('/admin/clinic/CRUDclinic',[MainController::class,'addClinicSubmit'])->name('post.addclinicsubmit');

Route::get('/admin/users/CRUDusers',[MainController::class,'getAllUsers'])->name('post.getallusers');

Route::get('/admin/users/CRUDusers',[MainController::class,'showUserInfo'])->name('post.showuserinfo');

Route::post('/admin/users/editUserDetails/save/',[MainController::class,'editUserDetails'])->name('post.edituserdetails');

Route::get('/admin/clinic/CRUDclinic',[MainController::class,'getAllClinic'])->name('post.getallclinic');

Route::get('/admin/users/editUser/{user_id}/',[MainController::class,'getUsers'])->name('post.getusers');

Route::get('/admin/users/viewCustomerDetails/{user_id}',[MainController::class, 'userCustomerDetails'])->name('post.usercustomerdetails');

Route::get('/admin/users/inputUser/{user_id}', [MainController::class, 'getUserID'])->name('post.getuserid');

Route::post('/admin/users/inputUser/save/', [MainController::class, 'addCustomer'])->name('post.adminaddcustomer');

Route::post('/admin/clinic/registerClinic',[MainController::class,'addClinicSubmit'])->name('clin.addclinicsubmit');

Route::get('/admin/clinic/editClinic/{clinic_id}',[MainController::class, 'editClinic'])->name('clin.editclinic');

Route::post('/admin/clinic/editClinic/{clinic_id}',[MainController::class,'editClinicSubmit'])->name('clin.editclinicsubmit');
});

