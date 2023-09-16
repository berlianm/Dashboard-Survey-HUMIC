<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta name="description" content="Universitas Telkom">
    <meta name="author" content="ThemePixels">
     <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo1.png">
    <title>Dashboard Survey HUMIC</title>
    <!-- vendor css -->
    <link href="{{asset('assets/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/lib/datatables.net-dt/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/select2/css/select2.min.css')}}">
    <link href="{{asset('assets/lib/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dashforge.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashforge.dashboard.css')}}">
    <style>
    @media print {
        #printPageButton {
            display: none;
        }
    }
    .custom-btn {
        background-color: #B90000;
        color: #ffffff;
    }
    
    .custom-btn:hover {
        background-color: #ff0000;
    }

    .custom-text{
        background-color: #ffffff;
        color: #000000;
    }
    
    .text-hover {
        text-decoration: none;
    }

    .text-hover:hover {
        background-color: #ff0000;
        color: #ffffff
    }

    input[type="radio"]:checked {
      background-color: #B90000;
    }
    </style>
</head>

<body class="mn-ht-100v d-flex flex-column">

    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/lib/feather-icons/feather.min.js')}}"></script>
    <!-- <script src="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script> -->
    <script src="{{asset('assets/js/dashforge.js')}}"></script>
    <script src="{{asset('assets/lib/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- <script src="{{asset('assets/js/dashforge.aside.js')}}"></script> -->
    <script src="{{asset('assets/lib/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/lib/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/js/dashforge.sampledata.js')}}"></script>
    <script src="{{asset('assets/lib/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('assets/js/dashboard-one.js')}}"></script> -->
    
    <header class="navbar navbar-header navbar-header-fixed">
        <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
        <div class="navbar-brand">
            @if($email != 'admin@gmail.com')
            <a href="#" class="aside-logo">HUMIC Engineering <span style="color: #B90000">Telkom University</span></a>
            @endif        </div><!-- navbar-brand -->
        <div class="navbar-right">       
        <a >{{$email}}</a>     
        
      </div><!-- navbar-right -->
        
    </header>