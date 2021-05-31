
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Welcome Dr  </title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('doctor/assets/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/css/material.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('doctor/assets/css/sb-admin.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/css/time/bootstrap-clockpicker.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <!-- Custom Fonts -->
    </head>
    <body>
    <div id="">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="/doctorprofile">Welcome Dr   Name </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/doctorschedule"><i class="fa fa-fw fa-table"></i> DoctorSchedule</a>
                </li>
                <li>
                    <a href="/doctorinbox"><i class="fa fa-fw fa-edit"></i> inbox</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
             <li>
                <a href="doctordashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="addschedule.php"><i class="fa fa-fw fa-table"></i> Doctor Schedule</a>
            </li>
            <li>
                <a href="patientlist.php"><i class="fa fa-fw fa-edit"></i> Patient List</a>
            </li>
        </ul>
    </div> -->
    <!-- /.navbar-collapse -->
</nav>
<!-- navigation end -->


        <!-- Page Heading end-->
        @yield('content')
         <!-- jQuery -->
         <script src="{{asset('assets/js/jquery.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('doctor/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('doctor/assets/js/bootstrap-clockpicker.js')}}"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->
        </body>
    </html>