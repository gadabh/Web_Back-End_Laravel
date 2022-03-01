<x-app-layout>
    

    <!DOCTYPE html>
<html dir="ltr" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div class="container">
  <div class="row">
 
    <div class="col-sm-3 ">

    
<div class="card" style="width: 90rem;">
  <div class="card-body">
    <h4 class="card-title">update hebergement </h4>
    <div class="container">
    <form action="/edit" methode="POST">
    @csrf
    <input type="hidden" name="id" value="{{$hebergements['id']}}"><br><br>
    <input type="hidden" name="updated_at" value="{{$hebergements['updated_at']}}"><br><br>

    <table class="table table-borderless">
  
    <tbody>
      <tr>
        <td>Nom * <br><br></td>
        <td><input type="text" name="nom" value="{{$hebergements['nom']}}"></td>
       
      </tr>
      <tr>
        <td>Nombre Voyageurs *
</td>
        <td><input type="text" name="nbr_voyageurs" value="{{$hebergements['nbr_voyageurs']}}"></td>
     
      </tr>
      <tr>
        <td>Nombre Chambre Disponible *</td>
        <td> <input type="text" name="nbr_chambre_dispo" value="{{$hebergements['nbr_chambre_dispo']}}">
</td>
    
      </tr>
      <tr>
        <td>Nombre Place Disponible * </td>
        <td><input type="text" name="nbr_place_dispo" value="{{$hebergements['nbr_place_dispo']}}">
</td>
    
      </tr>
      <tr>
        <td>Description *</td>
        <td><input type="text" name="description" value="{{$hebergements['description']}}">
</td>
    
      </tr>
      <tr>
        <td>Wifi</td>
        <td><input type="text" name="wifi" value="{{$hebergements['wifi']}}"></td>
    
      </tr>
      <tr>
        <td>Lave Linge</td>
        <td> <input type="text" name="lave_linge" value="{{$hebergements['lave_linge']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Chauffage </td>
        <td><input type="text" name="chauffage" value="{{$hebergements['chauffage']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Television</td>
        <td> <input type="text" name="television" value="{{$hebergements['television']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Climatisation</td>
        <td> <input type="text" name="climatisation" value="{{$hebergements['climatisation']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Eau Chaude</td>
        <td> <input type="text" name="eau_chaude" value="{{$hebergements['eau_chaude']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Espace Travail Ordinateur</td>
        <td> <input type="text" name="espace_travail_ordinateur" value="{{$hebergements['espace_travail_ordinateur']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Espace Enfant</td>
        <td> <input type="text" name="espace_enfant" value="{{$hebergements['espace_enfant']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Salle De Bain</td>
        <td> <input type="text" name="salle_de_bain" value="{{$hebergements['salle_de_bain']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Cuisine</td>
        <td> <input type="text" name="cuisine" value="{{$hebergements['cuisine']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Proprietaire ID *</td>
        <td><input type="text" name="proprietaire_id" value="{{$hebergements['proprietaire_id']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Ville ID * </td>
        <td><input type="text" name="ville_id" value="{{$hebergements['ville_id']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Latitude *</td>
        <td><input type="text" name="latitude" value="{{$hebergements['latitude']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Longitude *</td>
        <td><input type="text" name="longitude" value="{{$hebergements['longitude']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Adresse</td>
        <td> <input type="text" name="adresse" value="{{$hebergements['adresse']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Chambre Individuel</td>
        <td> <input type="text" name="chambre_individuel" value="{{$hebergements['chambre_individuel']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Chambre a Deux </td>
        <td><input type="text" name="chambre_a_deux" value="{{$hebergements['chambre_a_deux']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Chambre a Trois</td>
        <td> <input type="text" name="chambre_a_trois" value="{{$hebergements['chambre_a_trois']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Prix Adulte</td>
        <td> <input type="text" name="prix_adulte" value="{{$hebergements['prix_adulte']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Prix Enfant</td>
        <td> <input type="text" name="prix_enfant" value="{{$hebergements['prix_enfant']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Disponibilite</td>
        <td> <input type="text" name="disponibilite" value="{{$hebergements['disponibilite']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>Prix Enfant15</td>
        <td> <input type="text" name="prix_enfant15" value="{{$hebergements['prix_enfant15']}}"><br><br>
</td>
    
      </tr>
      <tr>
        <td>               </td>
        <td> <button type="submit" class="btn btn-secondary">Update</button>
</td>
    
      </tr>

    </tbody>
  </table>
</div>
  















  
  
</form>
</div>

</div>
                    
</div>
  
  </div>
   
</div>

                
</body>

</html>

</x-app-layout>
