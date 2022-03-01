<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
use DB;

class reclamationsController extends Controller
{
    //
    function show(){
     $data2= reclamation::all();
  return view('reclamation',['reclamations'=>$data2]);

   //return view('reclamation');
}
     
function deleterec($id){
  $data= reclamation::find($id);
  $data->delete();
  return redirect('reclamations');

  }

  



  function editrec($id){
   $data=reclamation::find($id);
   return view('editreclamation',['rec'=>$data]);
}

function updaterec(Request $req){
 $data= reclamation::find($req->id);

 $data->etat=$req->etat;
 
 
 
 $data->save();
 return redirect('reclamations');
}
  


  }
  
   
