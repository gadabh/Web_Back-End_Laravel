<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guide;
use DB;
class guideController extends Controller
{
    //
    function show(){
      $data2= guide::all();
   return view('guide',['guides'=>$data2]);
   
    
   }
   
function deleteguide($id_g){
    $data= guide::find($id_g);
    $data->delete();
   return redirect('guide');
   
   }
 
   public function addguide(Request $request){
     
      $item=new guide;
      $item->nom_g=$request->nom_g;
      $item->prenom_g=$request->prenom_g;
      $item->cin_g=$request->cin_g;
      $item->ville=$request->ville;

      
     //***************
     
     

     //******************/
     if($request->hasFile('image_g'))
     {
         $file = $request->file('image_g');
         $originalname = $file->getClientOriginalName();
         $path = $file->storeAs('image_guide/', $originalname);
     }
     //************ */

      $item->image_g= $originalname;
     
       
      $item->save();
      
     if ($item->save()){
         return redirect('guide');

      }else{
         return ['résultats'=>'operation faild'];
      }
   }
}
 

   

