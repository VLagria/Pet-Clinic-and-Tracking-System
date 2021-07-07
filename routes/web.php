<?php

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
    return view('admin/clinic/CRUDclinic');
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