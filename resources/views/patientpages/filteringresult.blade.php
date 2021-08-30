<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Filtering Result </title>
        <link rel="shortcut icon" href="{{asset('images/hdoc2.png')}}">
        <!-- -->
        <link rel="stylesheet" href="{{asset('asset_filtering/css/fontawsom-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset_filtering/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset_filtering/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
        <!-- Bootstrap Core CSS -->
        
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
        <link href="{{asset('assets/css/material.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
       
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
                                <a href="/patientinbox/{{$patient->id}}"><i class="fa fa-fw fa-envelope"></i> notifications</a>
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
              <!-- ################# Our Team Starts Here#######################--->


    <section class="our-team">
        <div class="container">
            <div class="inner-title">
                <h2>Filtering result
                </h2>
                <p>Take a look at result and start booking </p>
            </div>
            <div class="row team-member">
            <!-- sart row  -->
            @if(count($docotrs)!=0)
            @foreach($docotrs as $doctor)
                <div class="col-md-3 col-sm-6">
                    <div class="user-card">
                        <div class="userar">
                            <img class="teammempic" alt="" class="responsive" src="{{asset('upload/'.$doctor->image)}}">
                        </div>
                        <div class="detfs">
                            <p>{{$doctor->fname}} {{$doctor->lname}} <i> </i></p>
                            <a href="/bookingform/{{$patient->id}}/{{$doctor->id}}"  type="button" class="btn btn-primary"
                            >
                            booking
                            </a>
                            <a href="/viewdoctorprofile/{{$patient->id}}/{{$doctor->id}}"  type="button" class="btn btn-primary"
                            >
                            view profile
                            </a> 
                            <br>
                           

                        </div>
                    </div>
                </div>
                @endforeach
@else <div>
<div class="alert alert-danger">
no result!!
</div>
</div>
@endif
            </div>
        </div>
    </section>
<!-- our team end here  -->
          </div>
        </div>
       <!-- end warpper  -->
          <script src="{{asset('assets/js/jquery.js')}}"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>  
         <script src="{{asset('asset_filtering/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('asset_filtering/js/popper.min.js')}}"></script>
        <!-- <script src="assets/js/bootstrap.min.js"></script> -->
        <script src="{{asset('asset_filtering/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
        <script src="{{asset('asset_filtering/js/script.js')}}"></script> 
        </body>
    </html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>Input Group Button</h1>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
  <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
  <form action="/action_page.php">
    <div class="input-group">
    <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
</div>

</body>
</html> -->
