   
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
        <a class="navbar-brand" href="/doctorprofile/{{$doctor->id}}">Welcome Dr   {{$doctor->fname}} </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/doctorschedule/{{$doctor->id}}"><i class="fa fa-fw fa-table"></i> DoctorSchedule</a>
                </li>
                <li>
                    <a href="/doctorinbox/{{$doctor->id}}"><i class="fa fa-fw fa-edit"></i> inbox</a>
                </li>
                <li class="divider"></li>
                <li>
                <a href="/changepssword/{{$doctor->id}}"><i class="glyphicon glyphicon-cog"></i> Change Password </a>
            </li>
                <li>
                    <a href="/docotorlogout/{{$doctor->id}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">
                            your Patients
                            </h2>
                           
                        </div>
                    </div>
                    <!-- Page Heading end-->

                    <!-- panel start -->
                    <div class="panel panel-primary filterable">

                        <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">patient list </h3>
                            <div class="pull-right">
                            <!-- <button class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button> -->
                        </div>
                        </div>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                           <!-- Table -->
                           @if(count($AcceptedRequests)!=0)
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="filters">
        
                                    <th><input type="text" class="form-control" placeholder=" patientFName" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="patientLName" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="telephoneNumber" disabled></th>
              
                                    <th><input type="text" class="form-control" placeholder="Description" disabled></th>
                    
                                    <th><input type="text" class="form-control" placeholder="Day" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="doctornotes" disabled></th>
                                </tr>
                            </thead>
                           
                            <tbody>
                            @foreach($AcceptedRequests as $request)
                            @foreach($patients as $patient)
                            @if($patient->id == $request->pateintid )
                            @if($request->appoinmentstatus =="accepte")
                               <tr>
                             
                                   <td>{{$patient->fname}}</td>                                
                                   <td>{{$patient->lname}}</td>
                                   <td>{{$patient->telephonenumbers}}</td>
                                  
                                    <td>{{$request->description}}</td>
                                    <td>{{$request->day}}</td>
                                    <td>{{$request->doctornote}}</td>
                                   <!-- doctor notes -->
                                </tr>
                                @endif
                                @endif
                                @endforeach 
                                @endforeach

                          </tbody> 
                            </table>
                            @else
                            <div> non patient you have .  </div>
                           @endif 
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->

                </div>
            </div>
        <!-- /#wrapper -->
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
