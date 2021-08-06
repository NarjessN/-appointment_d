
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Patient Dashboard</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('asset_filtering/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/material.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/date/bootstrap-datepicker.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/date/bootstrap-datepicker3.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
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
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- /.row -->
                    <!-- template start -->
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                                
                                
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h2 class="panel-title"></h2>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{asset('upload/'.$patient->image)}}" class="img-circle img-responsive"> </div>
                                            
                                            
                                            <div class=" col-md-9 col-lg-9 ">
                                            <div class="modal-body">
                    <!-- form start -->
                    <form action="/updateprofile/{{$patient->id}}" 
                    enctype="multipart/form-data"
                    method="post">
                        <table class="table table-user-information">
                        @csrf
                            <tbody>
                       
                                 <tr>
                                    <td>description </td>
                                    <td>
                                    <textarea name ="description" >
                                    still working on it 
                                    </textarea>
                                    </td>
                                </tr> 
                                <tr>
                                    <td>phone number </td>
                                    <td><input 
                                   
                                    type="text"  name="phonenumber" value="{{$patient->telephonenumbers}}"  /></td>
                                </tr>
                                <tr>
                                    <td>profile picture</td>
                                    <td><input class="form-control" name="image"   type ="file" value ="" /></td>
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
            <script src="{{asset('assets/js/date/bootstrap-datepicker.js')}}"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
            <!-- Bootstrap Core JavaScript -->
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            
            
        </body>
    </html>