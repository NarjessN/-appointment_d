<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Make Appoinment</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- <link href="asset_filtering/css/style.css" rel="stylesheet"> -->
		<link href="assets/css/material.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<link href="assets/css/default/blocks.css" rcel="stylesheet">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />
		<!-- Custom CSS -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/font-awesome/css/font-awesome.min.css"
         rel="stylesheet" type="text/css">
	</head>
	<body>
	<div id="">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/patientprofile">Patient Name</a>
                </div>
               
                  <!-- Top Menu Items -->
				  <ul class="nav navbar-right top-nav">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href=/finddoctor><i class="fa fa-fw fa-edit"></i>  booking</a>
                            </li>
                            <li>
                                <a href="/responce"><i class="fa fa-fw fa-envelope"></i> inbox</a>
                            </li>
                            <li>
                                <a href="/request"><i class="fa fa-fw fa-envelope"></i> request</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href=""><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            Dashboard
                            </h1>
                          
                        </div>
					</div>
					 <!-- /.row -->
					</div>
					<!--end container   -->
					<!-- display appoinment start -->
				<div class='container'>
				<div class='row'>
				<div class='page-header'>
				<h1>Your appointment list. </h1>
				</div>
				<div class='panel panel-primary'>
				<div class='panel-heading'>List of Appointment</div>
				<div class='panel-body'>
				<table class='table table-hover'>
				<thead>
				<tr>
				<th>App Id</th>
				<th>Doctorfullname </th>
				<th>Specialization</th>
				<th>Day </th>
				<th>Time </th>
				<th>Description </th>
                <th>Doctor Notes </th>
				</tr>
				</thead>

				</table> 
				</div>
				</div>
				</div>
				</div> 
				<!-- appoinment end  -->
				<!-- display appoinment end -->
				</div>
				<!-- end page wrapper -->
                   
        	 		

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>