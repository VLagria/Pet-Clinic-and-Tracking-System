<?php

use App\Http\Controllers\MainController;
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

Route::get('/login/login', [MainController::class, 'logIn']);
Route::get('/admin/index', [MainController::class, 'adminDashboard']);
Route::get('/admin/pets/CRUDpet', [MainController::class, 'adminPet']);
Route::get('/admin/clinic/CRUDclinic', [MainController::class, 'adminClinic']);
Route::get('/admin/customer/CRUDcustomers', [MainController::class, 'adminCustomer']);
Route::get('/admin/vet/CRUDvet', [MainController::class, 'adminVet']);

// Mao ni ako gibuhat 
//kinsa diay ka?? HAHAHAHAHH



Route::get('/login/login',function(){
    return view('login/login');
});

Route::get('login/customerLogin',function(){
    return view('login/customerLogin');
});


Route::get('createAcc/createacc',function(){
    return view('createAcc/createacc');
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

Route::get('veterinary/vethome', function () {
    return view('veterinary/vethome');
});
Route::get('veterinary/vetpatient',function() {
    return view('veterinary/vetpatient');
});
Route::get('veterinary/viewvetpatient',function() {
    return view('veterinary/viewvetpatient');
});
Route::get('veterinary/vetclinic',function() {
    return view('veterinary/vetclinic');
});
Route::get('veterinary/petregistration',function() {
    return view('veterinary/petregistration');
});
Route::get('veterinary/viewvetclinic',function() {
    return view('veterinary/viewvetclinic');
});
Route::get('veterinary/viewvet',function() {
    return view('veterinary/viewvet');
});
Route::get('veterinary/vetcustomer',function() {
    return view('veterinary/vetcustomer');
});
Route::get('veterinary/viewvetcustomer',function() {
    return view('veterinary/viewvetcustomer');
});
Route::get('veterinary/assignvet',function() {
    return view('veterinary/assignvet');
});
