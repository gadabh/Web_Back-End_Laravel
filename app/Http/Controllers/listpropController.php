<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proprietaire;
use DB;
class listpropController extends Controller
{
   
  

   function show(){
    $data1= proprietaire::all();
 return view('listprop',['proprietaires'=>$data1]);
   }


 
function listprop(){
         $data= proprietaire::all();

    return view('listprop',['proprietaires'=>$data]);
}

function deleteprop($id){
    $data= proprietaire::find($id);
    $data->delete();
return redirect('listprop');

}


 
    
}
