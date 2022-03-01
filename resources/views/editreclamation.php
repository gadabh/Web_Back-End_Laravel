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
    <title>edit reclamations</title>
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
    <h4 class="card-title">update reclamation </h4>
    <div class="container">
    <form action="/updatRec" methode="POST">
@csrf
    <table class="table table-borderless">
    <input type="hidden" name="id" value="{{$reclamations['id']}}"><br><br>

     
        <td>etat * <br><br></td>
        <td><input type="text"  name="etat"  value=""></td>

 
      
     
   
   
     
    
        <td> <button type="submit" class="btn btn-secondary">Update</button>

  
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
