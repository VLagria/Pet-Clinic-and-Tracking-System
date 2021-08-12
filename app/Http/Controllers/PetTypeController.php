<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PetTypeController extends Controller
{

function addType(Request $request){

    $type_name= $request->type_name;

    $checkQuery = DB::table('pet_types')->where('type_name','=', $type_name)->first();

    if ($checkQuery) {
        return redirect('/admin/pets/CRUDaddtype')->with('existing','Pet type is Already Exist');
    }else{

        $request->validate([
            'type_name'=>'required',
        ]);
        DB::table('pet_types')->insert([
            'type_name'=>$request->type_name
        ]);
        return redirect('/admin/pets/CRUDpettype')->with('newPettype','Pet type added succesfully');
}


}

    function retrieveType(){
    
        $typePet = DB::table('pet_types')->get();

        return view('/admin/pets/CRUDpettype',compact('typePet'));
    }

    function getTypeID($type_id){

        $getID=DB::table('pet_types')->where('type_id','=',$type_id)->first();

        return view('/admin/pets/CRUDedittype',compact('getID'));
    }


    function saveType(Request $request,$type_id){

        DB::table('pet_types')
        ->where('type_id',$type_id)
        ->update([
            'type_name'=>$request->type_name
        ]);
        return redirect('/admin/pets/CRUDpettype')->with('Success','Successfully Updated!');
    }
    function deleteType($type_id){
        DB::table('pet_types')->where('type_id', $type_id)->delete();
        return redirect('/admin/pets/CRUDpettype')->with('type_deleted','Sucessfully Deleted!!!!!');

    }

    public function search(Request $request){
        
        $search = $request->get('search');
        $usersData = DB::table('pet_types')->where('type_id','=','3', 'AND','type_name', 'like', '%'.$search.'%')->paginate('5');
        return view('/admin/pets/CRUDpettype', compact('typePet'));
    }

    public function widgetClinic(){
        $widgetClinic = DB::table('clinic')->get();
        return view('/veterinary/vetclinic', compact('widgetClinic'));
    }
}

