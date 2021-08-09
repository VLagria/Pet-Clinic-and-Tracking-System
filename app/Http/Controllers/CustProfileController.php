<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustProfileController extends Controller
{
    public function countPet(){
    
        $countPet = DB::table('pets')->count();
        
        return view('/customer/custProfile', compact('countPet'));
    }
    
    
}

