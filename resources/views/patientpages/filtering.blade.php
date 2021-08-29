<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Filtering Page </title>
        <link rel="shortcut icon" href="{{asset('images/hdoc2.png')}}">
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('asset_filtering/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/material.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    </head>
    <style>
       body{

background-image: url("");

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
    </style>
 
    <body>
        <div class="">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top"
             
             role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <div class="navbar-brand" id="hellodoc"> EAbooking</div>
                    <a class="navbar-brand" href="/patientprofile/{{$patient->id}}"> welcome patient :{{$patient->fname}}</a>
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
                            Dashboard
                            </h1>
                          
                        </div>
                    </div>
                    <!-- filtering from start  -->
  
            <div class="container-fluid">
            <h1>Filtering Button</h1>
            <p></p>
            <p>to make an appoinmnet search for the doctor according to specilaization:</p>
            <br>
            <form action="/filteringdoctor/{{$patient->id}}"
            method=get
            >
              <div class="input-group">
              <select class="form-control"
                        name="spicilization"
                        
                         >
                        <option  
                        value="jawsurgery"
                       >jawsurgery</option>
                        <option
                        value="implantologist"
                         >implantologist</option>
                        <option
                        value="orthodontist"
                        >orthodontist</option>
                        <option
                        value="pediatricdentist"
                        >pediatricdentist</option>
                        <option
                        value="prosthodontics"
                        >prosthodontics</option>
                    </select>
                
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form>
          </div>
<!-- filtering form end  -->
          </div>
       <!-- end warpper  -->
      
          <script src="{{asset('assets/js/jquery.js')}}"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>   
        </body>
    </html>



