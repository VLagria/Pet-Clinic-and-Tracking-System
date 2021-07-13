<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\user_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VeterinariansController extends Controller
{
     
    function getAllCustomer(){
        $customers = DB::table('customers')
        ->select('customer_id', DB::raw("CONCAT(customer_fname,' ', customer_lname) AS customer_name"),'customer_mobile', 'customer_tel', 
        'customer_gender','customer_birthday', DB::raw("CONCAT(customer_blk,' ', customer_street,' ', customer_subdivision,' ',
        customer_barangay,' ',customer_city,' ', customer_zip) AS customer_address"), 'user_id', 'customer_isActive')
        ->paginate(15);
        return view('veterinary/viewvetcustomer', ['customers'=>$customers]);
    }
    
}
