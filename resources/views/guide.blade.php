<x-app-layout>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Etnafes voyages</title>
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
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #4f6571;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 200px;
  height: 50px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>

<body>
  <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        
  
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                    <img src="/images/logo2.png" alt="logo" style=" max-width: 70%;
                        height: auto;   margin-left:10% ; padding-bottom: 70px; padding-top: 1px;"/>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('heberg') }}" :active="request()->routeIs('heberg')" aria-expanded="false"><i class="mdi mdi-city"></i><span class="hide-menu">hebergements</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('listprop') }}" :active="request()->routeIs('listprop')" aria-expanded="false"><i class="mdi mdi-tag-faces"></i><span class="hide-menu">  Proprietaires</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('reclamations') }}" :active="request()->routeIs('reclamations')" aria-expanded="false"><i class="mdi mdi-shield-outline"></i><span class="hide-menu"> Reclamations</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('guide') }}" :active="request()->routeIs('guide')" aria-expanded="false"><i class="mdi mdi-worker"></i><span class="hide-menu"> Guides</span></a></li>


                       </ul>
                </nav>
                 <!-- End Sidebar navigation -->
                 </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
     
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                      
                    <form action="addguide" methode="POST">
                        
                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                       
    @csrf
                            <div class="col-md-2"><h5 class="card-title">Liste des guides</h5></div>

                            <div class="col-md-2 ml-auto"> <button class="submit" style="vertical-align:middle"  ><span>Ajouter Guide </span></button></div>
</form>
</div>
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th>id</th>
                                                <th>nom guide</th>
                                                <th>prenom guide</th>
                                                <th>cin</th>
                                                <th>ville</th>
                                                <th>image</th>

                                            
                                                <th>action </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                        @foreach($guides as $guide)
                                            <tr>
                                                <th>{{$guide['id_g']}}</th>
                                                <th>{{$guide['nom_g']}}</th>
                                                <th>{{$guide['prenom_g']}}</th>
                                                <th>{{$guide['cin_g']}}</th>
                                                <th>{{$guide['ville']}}</th>
                                              
                                                <th>  <img  style=" width:150px; width: 150px;" src="http://192.168.1.146/laravel/back3%20-%20PFE1%20-%20Copie%20(3)%20-%20Copie/storage/app/image_guide/{{$guide['image_g']}}" alt="Logo"></th>
                                               
                                                <th><a href={{"deleteguide/".$guide['id_g']}}>delete</a></td>

                                             
                                            </tr>
                                            @endforeach
                                              
                                       
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>id</th>
                                                <th>nom guide</th>
                                                <th>prenom guide</th>
                                                <th>cin</th>
                                                <th>ville</th>
                                                <th>image</th>

                                             
                                                <th>action </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
      
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>
</x-app-layout>