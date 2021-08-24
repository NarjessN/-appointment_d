
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Doctor Profile  </title>
        <link rel="shortcut icon" href="{{asset('images/hdoc2.png')}}">
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('asset_filtering/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/material.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}"
         rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <div class="navbar-brand" id="hellodoc"> EAbooking</div>
                    <a class="navbar-brand" href="/patientprofile/{{$patient->id}}">welcome patient :{{$patient->fname}} </a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/finddoctor/{{$patient->id}}"><i class="fa fa-fw fa-edit"></i>  booking</a>
                            </li>
                            <li>
                                <a href="/patientinbox/{{$patient->id}}"><i class="fa fa-fw fa-envelope"></i> inbox</a>
                            </li>
                            <li>
                                <a href="/yourrequest/{{$patient->id}}"><i class="fa fa-fw fa-envelope"></i> your request</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/changpassword/{{$patient->id}}"><i class="glyphicon glyphicon-cog"></i> Chang Password </a>
                            </li>
                            <li>
                                <a href="/patientlogout/{{$patient->id}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
              
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                             Doctor Profile Page
                            </h1>
                     
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- template start -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                                
                                
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{asset('upload/'.$doctor->image)}}" class=" img-responsive"> </div>
                                            
                                            <form action="" method="post" name="form1" id="form1">
                                                <div class=" col-md-9 col-lg-9 ">
                                                    <table class="table table-user-information" align="center">
                                                        <tbody>
                                                            <!-- <tr>
                                                                <td>PatientId:</td>
                                                                <td>{{$patient->fname}}</td>
                                                            </tr> -->
                                                            <tr>
                                                                <td>DoctorFirstName:</td>
                                                                <td>{{$doctor->fname}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>DoctorLastName</td>
                                                                <td>{{$doctor->lname}}</td>
                                                            </tr>
                                                           
                                                            </tr> 
                                                            <tr>
                                                                <td>Description</td>
                                                                <td>
                                                                {{$doctor->description}}</td>
                                                               
                                                             
                                                            </tr>
                                                            <tr>
                                                                <td>ClinicAddress</td>
                                                                <td>
                                                                {{$doctor->addressclnic}}
                                                              </td>
                                                            </tr>
                                                            <tr>
                                                                <td>insurance companies</td>
                                                                <td>
                                                                {{$doctor->insurancecompanies}}
                                                              </td>
                                                            </tr>
                                                            <tr>
                                                                <td>DoctorEmail</td>
                                                                <td>
                                                                {{$doctor->email}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <input type="hidden" name="MM_update" value="form1" />
                                                    <input type="hidden" name="patientId" value="" />
                                                    
                                                    <!-- <a href="#" class="btn btn-primary">My Sales Performance</a> -->
                                                   
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                        <a href="/bookingform/{{$patient->id}}/{{$doctor->id}}"  type="button" class="btn btn-primary">
                                            booking
                                            </a>
                                           
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- template end -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
            </div>
            <!-- /#wrapper -->
             <!-- jQuery -->
            <script src="{{asset('assets/js/jquery.js')}}"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
          
        </body>
    </html>