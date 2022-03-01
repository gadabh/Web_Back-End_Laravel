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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('heberg') }}" :active="request()->routeIs('heberg')" aria-expanded="false"><i class="mdi mdi-city"></i><span class="hide-menu">Hébergements</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('listprop') }}" :active="request()->routeIs('listprop')" aria-expanded="false"><i class="mdi mdi-tag-faces"></i><span class="hide-menu"> Hôtes</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('reclamations') }}" :active="request()->routeIs('reclamations')" aria-expanded="false"><i class="mdi mdi-shield-outline"></i><span class="hide-menu"> Réclamations</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('guide') }}" :active="request()->routeIs('guide')" aria-expanded="false"><i class="mdi mdi-worker"></i><span class="hide-menu"> Guides touristiques</span></a></li>


                       </ul>
                </nav>
                 <!-- End Sidebar navigation -->
                 </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-md-12">
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Liste des Hôtes</h4>
                            </div>


                            <div class="card">
                            <div class="card-body">
                             
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                   
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>EMAIL</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>Telephone </th>
                                                <th>gouvernorat</th>

                                                <th>civilition</th>
                                                <th>cin</th>
                                                <th>login</th>
                                                <th>created_at</th>
                                                <th>updated_at </th>
                                                <th>active</th>
                                                <th>Modifier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($proprietaires as $proprietaire)
                                            <tr>
                                                <td>{{$proprietaire['id']}}</td>
                                                <td>{{$proprietaire['email']}}</td>
                                                <td>{{$proprietaire['nom']}}</td>
                                                <td>{{$proprietaire['prenom']}}</td>
                                                <td>{{$proprietaire['Telephone']}}</td>
                                                <td>{{$proprietaire['gouvernorat']}}</td>

                                                <td>{{$proprietaire['civilition']}}</td>
                                                <td>{{$proprietaire['cin']}}</td>
                                                <td>{{$proprietaire['login']}}</td>
                                                <td>{{$proprietaire['created_at']}}</td>
                                                <td>{{$proprietaire['updated_at']}}</td>
                                                <td>{{$proprietaire['active']}}</td>
                                               
                                                    <td><a href={{"deleteprop/".$proprietaire['id']}}>Supprimer</a></td>
                                             
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr >
                                                <th>ID</th>
                                                <th>EMAIL</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>Telephone </th>
                                                <th>gouvernorat</th>

                                                <th>civilition</th>
                                                <th>cin</th>
                                                <th>login</th>
                                                <th>created_at</th>
                                                <th>updated_at </th>
                                                <th>active</th>
                                                <th>Modifier</th>
                                            </tr>
                                        </tfoot>
                                
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                </div>
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
    </div>
    
  


                           
                        </div>
                        
                
            </div>
            
        </div>

    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="dist/js/jquery-ui.min.js"></script>
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
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="dist/js/pages/calendar/cal-init.js"></script>

</body>

</html>

</x-app-layout>
