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
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
  <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z"/>
</svg>
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
                                <h4 class="card-title">Liste des Hebergements</h4>
                            </div>


                            <div class="card">
                            <div class="card-body">
                             
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                   
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>nom</th>
                                                <th>nbr_voyageurs</th>
                                                <th>nbr_chambre_dispo</th>
                                                <th>nbr_place_dispo </th>
                                                <th>description</th>

                                                <th>proprietaire_id</th>
                                                <th>created_at</th>
                                                <th>updated_at </th>
                                                <th>login</th>
                                                <th>adresse</th>
                                                <th>disponibilite</th>
                                                
                                                <th>image</th>
                                                <th>delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($hebergements as $hebergement)
                                            <tr>
                                                <td>{{$hebergement['id']}}</td>
                                                <td>{{$hebergement['nom']}}</td>
                                                <td>{{$hebergement['nbr_voyageurs']}}</td>
                                                <td>{{$hebergement['nbr_chambre_dispo']}}</td>
                                                <td>{{$hebergement['nbr_place_dispo']}}</td>
                                                <td>{{$hebergement['description']}}</td>
                                                <td>{{$hebergement['proprietaire_id']}}</td>
                                                <td>{{$hebergement['created_at']}}</td>
                                                <td>{{$hebergement['updated_at']}}</td>

                                                <td>{{$hebergement['login']}}</td>
                                                <td>{{$hebergement['adresse']}}</td>
                                                <td>{{$hebergement['disponibilite']}}</td>
                                                <th>{{$hebergement['disponibilite']}}</th>

                                                <td><a href={{"delete/".$hebergement['id']}}>delete</a></td>
                                                <td><a href={{"edithebergements/".$hebergement['id']}}>Edit</a></td>

                                             
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr >
                                        <th>ID</th>
                                                <th>nom</th>
                                                <th>nbr_voyageurs</th>
                                                <th>nbr_chambre_dispo</th>
                                                <th>nbr_place_dispo </th>
                                                <th>description</th>

                                                <th>proprietaire_id</th>
                                                <th>created_at</th>
                                                <th>updated_at </th>
                                                <th>login</th>
                                                <th>adresse</th>
                                                <th>disponibilite</th>
                                                
                                                <th>image</th>
                                                <th>delete</th>
                                                <th>Edit</th>
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
