<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetTypeController extends Controller
{
    function petType(){
        $types = DB::table('pet_types')->get();
        return view('veterinary.viewvetpatient', compact('types'));
    }
}
