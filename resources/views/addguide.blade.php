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
    <div class="container">
    <form action="addguide" enctype="multipart/form-data"  method="POST">
    @csrf
  

    <table class="table table-borderless">
    <h1>Ajouter un Guide Tourestique </h1>

    <tbody>
      <tr>
        <td>Nom de guide<br><br></td>
        <td>        <input type="text" name="nom_g" placeholder="Nom de guide"><br><br>
</td>
       
      </tr>
      <tr>
        <td>prenom de guide
        </td>
        <td>        <input type="text" name="prenom_g" placeholder="prenom de guide"><br><br>
</td>
     
      </tr>
      <tr>
        <td>cin</td>
        <td>        <input type="text" name="cin_g" placeholder="cin de guide"><br><br>

</td>
    
      </tr>
      <tr>
        <td>Photo </td>
        <td>      <input type="file" name="image_g" id="image_g"><br><br>

</td>
    
      </tr>
      <tr>
        <td>Description *</td>
        <td>        <input type="text" name="ville" placeholder="ville de guide"><br><br>

</td>
    
      </tr>
      <tr>
  
        <td>        <button type="submit" class="btn btn-dark">Ajouter</buttom><br><br>

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


