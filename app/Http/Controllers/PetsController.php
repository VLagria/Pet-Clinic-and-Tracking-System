<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PetsController extends Controller
{
    function addPets(Request $request) {
        $pet_name= $request->pet_name;
    
        $checkQuery = DB::table('pet_name')->where('pet_name','=', $pet_name)->first();
    
        if ($checkQuery) {
            return redirect('/admin/pets/CRUDpet')->with('existing','Pet breed has Already Exist');
        }else{
    
            $request->validate([
                'pet_name'=>'required',
            ]);
            DB::table('pet_breeds')->insert([
                'pet_name'=>$request->breed_name
            ]);
            return redirect('/admin/pets/CRUDpet')->with('newPet','Pet breed added succesfully');
    }
    
    
    }
          function retrievePet(){
            $Pet = DB::table('pets')->get();
    
            return view('/admin/pets/CRUDpet',compact('Pet'));
        }
        function getPetID($pet_id){
            $getID = DB::table('pets')->where ('pet_id','=',$pet_id)->first();
            return view ('/admin/pets/CRUDeditpet',compact('getID'));
        }
        function savePet(Request $request,$breed_id){
    
            DB::table('pets')
            ->where('breed_id',$pet_id)
            ->update([
                'pet_name'=>$request->pet_name
            ]);
            return redirect('/admin/pets/CRUDpet')->with('Success','Successfully Updated!');
        }
        function deleteBreed($pet_id){
            DB::table('pets')->where('pet_id', $pet_id)->delete();
            return redirect('/admin/pets/CRUDpet')->with('pet_deleted','Sucessfully Deleted!!!!!');
    
        }
    
        public function search(Request $request){
            
            $search = $request->get('search');
            $usersData = DB::table('pets')->where('breed_id','=','3', 'AND','breed_name', 'like', '%'.$search.'%')->paginate('5');
            return view('/admin/pets/CRUDpet', compact('Pet'));
        }
    
       
    
    }