<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\VeterinariansController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\PetTypeController;
use App\Http\Controllers\PetBreedController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VeterinaryController;
use App\Http\Controllers\Customercontroller;
use App\Http\Controllers\CustProfilecontroller;
use App\Http\Controllers\PetCountController;
use App\Http\Controllers\ProfileController;

use App\Models\Customer;
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

Route::get('admin/pets/CRUDedittype',function() {
    return view('admin/pets/CRUDedittype');
});

//ADMIN INDEX

Route::get('/admin/index/home',[MainController::class, 'admin_CountData']);


//ADMIN USERS


Route::get('/userSearch',[MainController::class, 'userSearch'])->name('user.userSearch');
Route::get('/clinicSearch',[MainController::class, 'clinicSearch'])->name('clinic.clinicsearch');

Route::get('/admin/users/CRUDusers', [MainController::class, 'adminUsers']); //view users
Route::get('/admin/users/CRUDusers/user_details/{user_id}', 'App\Http\Controllers\MainController@user_details');
Route::get('/admin/users/CRUDusers/delete/{user_id}',[MainController::class, 'admin_DeleteUsers'])->name('post.deleteusers');
Route::get('/admin/users/viewCustomerDetails/delete/{customer_id}',[MainController::class, 'admin_DeleteCustomer'])->name('cust.deletecustomer');
Route::get('/admin/users/CRUDusers/',[MainController::class,'getAllUsers'])->name('post.getallusers');
Route::get('/admin/users/CRUDusers/',[MainController::class,'showUserInfo'])->name('post.showuserinfo');
Route::get('/admin/users/editUser/{user_id}/',[MainController::class,'admin_GetUsers'])->name('post.getusers');
Route::get('/admin/users/viewCustomerDetails/{user_id}',[MainController::class, 'admin_UserCustomerDetails'])->name('post.usercustomerdetails');
Route::get('/admin/users/inputUser/{user_id}', [MainController::class, 'admin_GetUserID'])->name('post.getuserid');
Route::post('/admin/users/inputUser/save/', [MainController::class, 'admin_addCustomers'])->name('post.adminaddcustomers');
Route::POST('/admin/users/registerUser',[MainController::class,'addAdminSubmit'])->name('post.addadminsubmit');
Route::POST('/admin/users/editUserDetails/save/',[MainController::class,'editUserDetails'])->name('post.edituserdetails');

Route::get('/veterinary/editaccount/{user_id}',[VeterinariansController::class, 'editAccount'])->name('vet.editaccount');


//ADMIN VETERINARY
Route::post('/admin/vet/registerVet/save', [VeterinaryController::class, 'admin_AddVeterinarian'])->name('vet.addveterinarian');
Route::POST('/admin/vet/editVet/saveUpdate/{vet_id}',[VeterinaryController::class,'admin_EditVetDetails'])->name('post.editvetdetails')
;

Route::get('/vetSearch',[VeterinaryController::class, 'vetSearch'])->name('vet.vetSearch'); //VET SEARCH

Route::get('/admin/customer/customerEdit/{customer_id}',[VeterinaryController::class, 'admin_veteditcustomersID']);
Route::get('/admin/vet/CRUDvet/home', [MainController::class, 'getAllVet'])->name('vet.getallvet');
Route::get('/admin/vet/adminEditPatient/{pet_id}',[VeterinaryController::class, 'admin_getPetID']);


//ADMIN CLINIC
Route::post('/admin/clinic/CRUDclinic/addClinic',[MainController::class,'admin_AddClinicSubmit'])->name('post.addclinicsubmit');
Route::get('/admin/clinic/CRUDclinic/home',[MainController::class,'getAllClinic'])->name('post.getallclinic');
Route::get('/admin/clinic/editClinic/{clinic_id}',[MainController::class, 'admin_EditClinic'])->name('clin.editclinic');
Route::post('/admin/clinic/editClinic/{clinic_id}',[MainController::class,'admin_EditClinicSubmit'])->name('clin.editclinicsubmit');
Route::post('/admin/clinic/registerClinic',[MainController::class,'admin_AddClinicSubmit'])->name('clin.addclinicsubmit');
Route::get('/admin/pets/CRUDpet/{pet_id}',[MainController::class, 'admin_PetClinic'])->name('pet.editpet');


//ADMIN CUSTOMER
Route::get('/admin/customer/delete/{customer_id}',[MainController::class, 'admin_DeleteCustomer2'])->name('vet.deletepatients');
Route::get('/admin/customer/viewPatient/{customer_id}',[VeterinaryController::class, 'admin_PatientsOwnerViews'])->name('custownerpatients');
Route::get('/admin/customer/CRUDcustomers/customerSearch',[VeterinaryController::class, 'customerSearch2'])->name('adminvet.custsearch');

//ADMIN PETS
// Route::get('/admin/pets/CRUDpet/{customer_id}',[PetsController::class, 'admin_patientsOwnerView'])->name('admin_custownerpatient');
Route::get('/admin/pets/CRUDpet/{customer_id}',[PetsController::class, 'admin_patientsOwnerView2'])->name('custownerpatients');
Route::get('/petTypeSearch',[MainController::class, 'petTypeSearch'])->name('pet.petTypesearch');
Route::get('/breedSearch',[MainController::class, 'breedSearch'])->name('pet.breedSearch');
Route::get('/petSearch1',[MainController::class, 'petSearch'])->name('pet.petSearch');


Route::get('/admin/pets/CRUDeditpet/{pet_id}',[MainController::class, 'admin_SavePetClinic'])->name('pet.editpetdetails');
Route::get('/admin/pets/CRUDeditpet/{pet_id}',[MainController::class,'admin_PetSave'])->name('pet.editsubmit');

// retrieveType
Route::get('/admin/index/dashboard', [MainController::class, 'adminDashboard']);
Route::get('/admin/pets/CRUDpet', [MainController::class, 'adminPet']);
Route::get('/admin/customer/CRUDcustomers', [MainController::class, 'adminCustomer']);
Route::get('/admin/vet/CRUDvet', [MainController::class, 'adminVet']);




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

Route::get('admin/vet/registerVet',function(){
    return view('admin/vet/registerVet');
});

Route::get('/veterinary/usercustomer/{user_id}',[VeterinariansController::class, 'userCustomer'])->name('vet.usercustomer');

Route::get('veterinary/registercustomer',function(){
    return view('veterinary/registercustomer');
});
// Route::get('/veterinary/registercustomer', [VeterinariansController::class, 'addCustID']);

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
Route::get('veterinary/viewveteditpatient',function(){
    return view('veterinary/viewveteditpatient');
});
Route::get('veterinary/profilevet',function(){
    return view('veterinary/profilevet');
});
Route::get('veterinary/editprofile',function(){
    return view('veterinary/editprofile');
});

Route::get('/veterinary/viewveteditpatient/{pet_id}',[VeterinariansController::class, 'getPetIDVet']);
Route::post('/veterinary/viewveteditpatient-save/{pet_id}',[VeterinariansController::class, 'savePetVet']);
Route::get('/veterinary/vieweditpatient/{pet_id}',[VeterinariansController::class, 'getPetID']);
Route::post('/veterinary/vieweditpatient-save/{pet_id}',[VeterinariansController::class, 'savePet']);


// Route::get('/veterinary/registerpet/{customer_id}', [VeterinariansController::class, 'getCustID']);

Route::get('/veterinary/registerpet/{customer_id}',[VeterinariansController::class, 'petClassification']);

Route::get('/veterinary/veteditcustomer/{customer_id}',[VeterinariansController::class, 'veteditcustomerID']);

Route::get('/veterinary/usereditcustomer/{customer_id}',[VeterinariansController::class, 'editcustomerID']);

Route::post('/veterinary/save_customer/{customer_id}',[VeterinariansController::class, 'saveCustomer'])->name('vet.savecust');


Route::get('/petsearch',[VeterinariansController::class, 'patientSearch'])->name('vet.patientsearch');
Route::get('/custsearch',[VeterinariansController::class, 'custSearch'])->name('vet.custsearch');

Route::get('/veterinary/profilevet', [MainController::class, 'vetProfile']); //get session for veterinary to profilevet page
Route::get('/veterinary/editprofile', [MainController:: class, 'editProfile']); // get session update for vet
Route::post('/veterinary/editprofile/{vet_id}/{user_id}', [VeterinariansController::class, 'saveProfile'])->name('save.vetimage');


Route::post('/veterinary/registercustomer', [VeterinariansController::class, 'addCustomer'])->name('vet.addcustomer');

Route::get('/veterinary/viewvetcustomer',[VeterinariansController::class, 'getAllCustomer'])->name('vet.getallcustomer');
Route::get('/veterinary/viewvetpatient',[VeterinariansController::class, 'retrieveInfo'])->name('vet.retrieveInfo');
Route::post('/veterinary/viewvetpatient',[VeterinariansController::class, 'addPatients'])->name('vet.addpatient');
Route::get('/veterinary/delete-viewvetpatient/{pet_id}',[VeterinariansController::class, 'deletePatients'])->name('vet.deletepatients');
Route::get('/veterinary/delete-custpatitent/{pet_id}',[VeterinariansController::class, 'deleteCustPatients'])->name('vet.deletecustpatients');
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

// Route::post('/patientautocomplete-search',[VeterinariansController:: class, 'getAutocompletePatients'])->name('patient.autocomplete');


Route::get('veterinary/qrcode', function () {
    return view('veterinary/qrcode');
});
Route::get('/veterinary/qrcode/{pet_id}',[VeterinariansController::class, 'QRcode'])->name('vet.qrcode');

Route::get('veterinary/vethome', function () {
    return view('veterinary/vethome');
});
Route::get('/veterinary/vethome',[VeterinariansController::class, 'countData']);
// Route::get('/veterinary/vethome',[MainController::class, 'vetProfile']);

Route::get('/admin/index',[MainController::class, 'admin_CountData']);

Route::get('veterinary/vetpatient',function() {
    return view('veterinary/vetpatient');
});

Route::get('veterinary/petregistration',function() {
    return view('veterinary/petregistration');
});


// Route::get('/veterinary/dd/getid',[MainController::class, 'getVetClinic']);  

// Route::get('/customer/custProfile/getSession',[MainController::class, 'userDashboard']);




Route::get('veterinary/vetcustomer',function() {
    return view('veterinary/vetcustomer');
});

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





Route::get('/admin/vet/registerVet/{clinic_id}', [VeterinaryController::class, 'admin_AddVetID'])->name('display');

Route::get('/admin/vet/viewVetDetails/{clinic_id}',[VeterinaryController::class, 'admin_viewVetDetails'])->name('clinicvet');

Route::get('/admin/vet/viewVetDetails/delete/{user_id}',[VeterinaryController::class, 'admin_DeleteVets'])->name('post.deletevets');

Route::get('/admin/vet/editVet/{vet_id}',[VeterinaryController::class, 'admin_GetVet'])->name('post.getvet');


Route::get('admin/pets/CRUDaddtype',function() {
    return view('/admin/pets/CRUDaddtype');
});
Route::get('admin/pets/CRUDaddbreed',function() {
    return view('/admin/pets/CRUDaddbreed');
});

//customerrrrr page
Route::get('/customer/custProfile',function() {
    return view('/customer/custProfile');
});
Route::get('/customer/custProf',function() {
    return view('/customer/custProf');
});
Route::get('/customer/custeditProfile',function() {
    return view('/customer/custeditProfile');
});
Route::get('/customer/custAcc',function() {
    return view('/customer/custAcc');
});
// Route::post('/customer/custAcc/{clinic_id}',[CustProfileController::class,'saveProfile']);


// // customer profile

// Route::get('/customer/custProf/{user_id}',[CustProfileController::class,'userprofileID']);
// Route::get('/customer/custProf/{user_id}',[CustProfileController::class,'saveUser']);

// customer profile
// Route::get('/customer/custProfile',[CustProfileController::class,'widgetPets']);
// Route::get('/customer/custProfile/',[ProfileController::class, 'countData'])->name('pet.count');
// Route::get('/customer/custProfile',[ProfileController::class,'userName']);



// PETSSS CRUD
Route::get('/admin/pets/CRUDpet',[PetsController::class,'retrievePet']);
// Route::post('/admin/pets/CRUDeditbreed/{pet_id}',[PetsController::class,'savePet'])->name('savepet');
Route::get('/admin/pets/delete-pets/{pet_id}',[PetsController::class,'deleteBreed'])->name('pet_deleted');


// PET CRUD

Route::get('/admin/pets/CRUDpettype/home',[PetTypeController::class,'retrieveType']);
Route::post('/admin/pets/CRUDaddtype',[PetTypeController::class,'addType'])->name('addtype');
Route::get('/admin/pets/CRUDedittype/{type_id}',[PetTypeController::class,'getTypeID']);
Route::post('/admin/pets/CRUDedittype/{type_id}',[PetTypeController::class,'saveType'])->name('savetype');
Route::get('/admin/pets/delete/{type_id}',[PetTypeController::class,'deleteType'])->name('deletetype');
Route::get('/veterinary/vetclinic',[PetTypeController::class,'widgetClinic']);
// PET BREED CRUD
Route::get('/admin/pets/CRUDpetbreed',[PetBreedController::class,'retrieveBreed']);
Route::post('/admin/pets/CRUDaddbreed',[PetBreedController::class,'addBreed'])->name('pets.addbreed');
Route::get('/admin/pets/CRUDeditbreed/{breed_id}',[PetBreedController::class,'getBreedID']);
Route::post('/admin/pets/CRUDeditbreed/{breed_id}',[PetBreedController::class,'saveBreed'])->name('savebreed');
Route::get('/admin/pets/delete-breed/{breed_id}',[PetBreedController::class,'deleteBreed'])->name('breed_deleted');

//PET CRUD


Route::get('/admin/customer/CRUDcustomers',[VeterinaryController::class, 'admin_GetAllCustomer'])->name('vet.getallcustomers');


Route::get('admin/customer/viewPatient', function () {
    return view('admin/customer/viewPatient');
});




Route::post('/admin/customer/customerEdit/{customer_id}',[VeterinaryController::class, 'admin_SaveCustomers'])->name('adminVet.savecusts');
Route::get('/customer/custhome/',[Customercontroller::class,'widgetPets']);
Route::get('/customer/custhome{pet_id}',[Customercontroller::class,'getPetID']);


Route::get('/admin/clinic/CRUDclinic/delete/{clinic_id}',[MainController::class, 'deleteClinic'])->name('post.deleteclinic');

});


Route::get('/customer/custProfile', [CustProfileController ::class, 'userProfile']);
Route::post('/customer/custhome', [Customercontroller ::class, 'getCustomerPet']);

Route::get('/customer/custAcc', [CustProfileController:: class, 'editProfile']);
Route::get('/customer/custeditProfile', [CustProfileController:: class, 'userProfile']);
Route::POST('/customer/custAcc/{customer_id}/{user_id}', [CustProfileController::class, 'saveProfile'])->name('save.custimage');

