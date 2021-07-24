<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\VeterinariansController;
use App\Http\Controllers\PetTypeController;
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


Route::get('/auth/login', [MainController::class, 'logIn'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
Route::post('/auth/registerValidate', [MainController::class, 'registerValidate'])->name('auth.registerValidate');
Route::get('/auth/recover', [MainController::class, 'recover'])->name('auth.recover');

Route::post('/auth/checkAdmin', [MainController::class, 'checkAdmin'])->name('auth.checkAdmin');
Route::get('/admin/index', [MainController::class, 'adminDashboard']);
Route::get('/admin/pets/CRUDpet', [MainController::class, 'adminPet']);
Route::get('/admin/customer/CRUDcustomers', [MainController::class, 'adminCustomer']);
Route::get('/admin/vet/CRUDvet', [MainController::class, 'adminVet']);
Route::get('/admin/users/CRUDusers', [MainController::class, 'adminUsers']);
Route::get('/admin/users/CRUDusers', [MainController::class, 'showUserTypes']);
Route::get('/admin/users/CRUDusers/user_details/{user_id}', 'App\Http\Controllers\MainController@user_details');
Route::get('/admin/users/CRUDusers/delete/{user_id}',[MainController::class, 'deleteUsers'])->name('post.deleteusers');


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

Route::get('/veterinary/viewvetcustomer',[VeterinariansController::class, 'getAllCustomer'])->name('vet.getallcustomer');
Route::get('/veterinary/viewvetpatient',[VeterinariansController::class, 'retrieveInfo'])->name('vet.retrieveInfo');
Route::post('/veterinary/viewvetpatient',[VeterinariansController::class, 'addPatients'])->name('vet.addpatient');
Route::get('/veterinary/delete-viewvetpatient/{pet_id}',[VeterinariansController::class, 'deletePatients'])->name('vet.deletepatients');
// Route::get('patients_detail/{pet_id}',[VeterinariansController::class, 'patients_detail']);
Route::post('/veterinary/viewvetcustomer', [VeterinariansController::class, 'addCustomer'])->name('cust.vetaddcustomer');
Route::post('/veterinary/edit-viewvetcustomer/{customer_id}', [VeterinariansController::class, 'editCustomer'])->name('vet.editcust');
Route::get('/veterinary/delete-viewvetcustomer/{customer_id}',[VeterinariansController::class, 'deleteCustomers'])->name('vet.deletecustomers');


Route::get('veterinary/viewpatient', function () {
    return view('veterinary/viewpatient');
});
Route::get('/veterinary/viewpatient/{customer_id}',[VeterinariansController::class, 'patientsOwnerView']);


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



Route::post('/admin/users/CRUDusers/save',[MainController::class,'addAdminSubmit'])->name('post.addadminsubmit');

Route::post('/admin/clinic/CRUDclinic',[MainController::class,'addClinicSubmit'])->name('post.addclinicsubmit');

Route::get('/admin/users/CRUDusers',[MainController::class,'getAllUsers'])->name('post.getallusers');

Route::get('/admin/users/CRUDusers',[MainController::class,'showUserInfo'])->name('post.showuserinfo');

Route::post('/admin/users/CRUDusers/edit',[MainController::class,'editUserSubmit'])->name('post.editusersubmit');

Route::get('/admin/clinic/CRUDclinic',[MainController::class,'getAllClinic'])->name('post.getallclinic');

Route::post('/CRUDusers/update/{user_id}', [MainController::class,'editUserSubmit'])->name('post.editusersubmit');

Route::post('/CRUDclinic/update/{clinic_id}',[MainController::class,'editClinicSubmit'])->name('post.editclinicsubmit');