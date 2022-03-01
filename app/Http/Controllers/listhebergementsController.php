<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hebergement;
use App\Models\proprietaire;
use App\Models\Reclamation;
use DB;
class listhebergementsController extends Controller
{
    //
    function show(){
         $data1= hebergement::all();
      return view('heberg',['hebergements'=>$data1]);
    }
    



          
        function delete($id){
        $data= hebergement::find($id);
        $data->delete();
        return redirect('listhebergement');

        }



        function edithebergements($id){
          $data= hebergement::find($id);
          return view('editheberg',['hebergements'=>$data]);
        }

      function update(Request $req){
        $data= hebergement::find($req->id);
        $data->nom=$req->nom;
        $data->nbr_voyageurs=$req->nbr_voyageurs;
        $data->nbr_chambre_dispo=$req->nbr_chambre_dispo;
        $data->nbr_place_dispo=$req->nbr_place_dispo;
        $data->description=$req->description;
        $data->wifi=$req->wifi;
        $data->lave_linge=$req->lave_linge;
        $data->chauffage=$req->chauffage;
        $data->television=$req->television;
        $data->climatisation=$req->climatisation;
        $data->eau_chaude=$req->eau_chaude;
        $data->espace_travail_ordinateur=$req->espace_travail_ordinateur;
        $data->espace_enfant=$req->espace_enfant;
        $data->salle_de_bain=$req->salle_de_bain;
        $data->cuisine=$req->cuisine;
        $data->proprietaire_id=$req->proprietaire_id;
        $data->ville_id=$req->ville_id;
        $data->latitude=$req->latitude;
        $data->longitude=$req->longitude;
        $data->adresse=$req->adresse;
        $data->chambre_individuel=$req->chambre_individuel;
        $data->chambre_a_deux=$req->chambre_a_deux;
        $data->chambre_a_trois=$req->chambre_a_trois;
        $data->prix_adulte=$req->prix_adulte;
        $data->prix_enfant=$req->prix_enfant;
        $data->disponibilite=$req->disponibilite;
        $data->prix_enfant15=$req->prix_enfant15;

        
        
        
        
        $data->save();
        return redirect('listhebergement');
      }
}
