   
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Doctor Profile  </title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('doctor/assets/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/css/material.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/material.css')}}" rel="stylesheet">
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
    <div class="navbar-brand" id="hellodoc"> EAbooking</div>
    <!-- <div class="navbar-brand" ><img src="{{asset('images/hdoc2.png')}}"></div> -->
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
                    <a href="/patientlist/{{$doctor->id}}"><i class="fa fa-fw fa-table"></i> Patient List </a>
                </li>
                <li>
                    <a href="/doctorinbox/{{$doctor->id}}"><i class="fa fa-fw fa-edit"></i> Inbox</a>
                </li>
                <li class="divider"></li>
                <li>
                <a href="/changepssword/{{$doctor->id}}"><i class="glyphicon glyphicon-cog"></i>  Change Password </a>
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
    Doctor Profile
    </h2>
    <!-- <ol class="breadcrumb">
    <li class="active">
    <i class="fa fa-calendar"></i> Doctor Profile
    </li>
    </ol> -->
    </div>
    </div>

    <!-- panel start -->
    <div class="panel panel-primary">

    <!-- panel heading starat -->
    <div class="panel-heading">
        <h3 class="panel-title">Doctor Details</h3>
    </div>
    <!-- panel heading end -->

    <div class="panel-body">
    <!-- panel content start -->
        <div class="container">
    <section style="padding-bottom: 50px; padding-top: 50px;">
    <div class="row">
    <!-- start -->
    <!-- USER PROFILE ROW STARTS-->
    <div class="row">
    <div class="col-md-3 col-sm-3">
        
        <div class="user-wrapper">
            <img src=" {{asset('upload/'.$doctor->image)}}" class="img-responsive" />
            <div class="description">
                <h4> Dr.{{$doctor->fname}} {{$doctor->lname}} </h4>
                <h5> <strong> I am a member of the Dental Association</strong></h5>
                
                <hr />
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-sm-9  user-wrapper">
        <div class="description">
            <h3>  </h3>
            <hr />
            
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    
                    <table class="table table-user-information" align="center">
                        <tbody>
                            
                            
                            <tr>
                                <td >first name </td>
                               
                                <td>{{$doctor->fname}}</td>
                            </tr>
                            <tr>
                                <td>last name </td>
                                <td>{{$doctor->lname}}</td>
                            </tr>
                            <tr>
                                <td>birthday</td>
                                <td>{{$doctor->birth}}</td>
                            </tr>
                            <!-- <tr>
                                <td>gender</td>
                                <td>
                                </td>
                            </tr> -->
                            <tr>
                                <td>spicilaization</td>
                                <td>
                                
                                {{$doctor->spicilization}}
                                </td>
                            </tr>
                            <tr>
                                <td>description</td>
                                <td >
                              
                            <h6>{{$doctor->description}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>clinic address</td>
                                <td>
                                <h6>{{$doctor->addressclnic}}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>
                                {{$doctor->email}}
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        
    </div>
    </div>
    <!-- USER PROFILE ROW END-->
    <div class="col-md-4">

    <!-- Large modal -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form action="/editeprofile/{{$doctor->id}}" 
                    enctype="multipart/form-data"
                    method="post" >
                        <table class="table table-user-information">
                        @csrf
                            <tbody>
                                
                                <tr>
                                    <td>First Name:</td>
                                    @error('fname'){{$message}} @enderror
                                    <td><input type="text" class="form-control" name="FirstName" value="{{$doctor->fname}}" 
                                    required
                                     />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td><input type="text" class="form-control" name="LastName" value="{{$doctor->lname}}" 
                                    required
                                     />
                                    
                                    </td>
                                </tr>
                             
                               
                                <tr>
                                    <td>description </td>
                                    <td><textarea type="text" class="form-control" name="description" 
                                    required
                                    value=""  >{{$doctor->description}}</textarea></td>
                                </tr>
                                <tr>
                                    <td>clinic address</td>
                                    <td><textarea
                                    required
                                    type="text" class="form-control" name="addressclnic" value="" >{{$doctor->addressclnic}}</textarea></td>
                                </tr>
                                <tr>
                                    <td>profile picture</td>
                                    <td><input class="form-control" name="image"   type ="file" value ="{{$doctor->image}}" /></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input class="form-control" name="email"
                                    required
                                      value="{{$doctor->email}}" /></td>
                                </tr>
                             
                                <tr>
                           

                                    <td>
                                        <input
                                            type="submit" name="submit" class="btn btn-info"
                                            value="Update Info"></td>
                                    </tr>
                                </tbody>
                                
                            </table>
                            
                            
                            
                        </form>
                        <!-- form end -->
                    </div>
                    
                </div>
            </div>
        </div>
        <br /><br/>
    </div>

    </div>
    <!-- panel content end -->
    <!-- panel end -->
    </div>
    </div>
    <!-- panel start -->

    </div>
    </div>
    <!-- /#wrapper -->

    <script src="{{asset('assets/js/jquery.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('doctor/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('doctor/assets/js/bootstrap-clockpicker.js')}}"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->
        </body>
    </html>


