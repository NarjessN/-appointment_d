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
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
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
        <div class="">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top"
             
             role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="/patientprofile/{{$patient->id}}">Patient Name</a>
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
                                <a href=""><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="/finddoctor"><i class="fa fa-fw fa-edit"></i> booking </a>
                        </li>
                        <li>
                            <a href="/request"><i class="fa fa-fw fa-table"></i> request </a>
                        </li>
                        <li>
                            <a href="/responce"><i class="fa fa-fw fa-table"></i> responce </a>
                        </li>
                        
                        
                    </ul>
                </div> -->
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
                    <!-- filtering from start  -->
  
            <div class="container-fluid">
            <h1>Filtering Button</h1>
            <p></p>
            <p>to make an appoinmnet search for the docotr according to specilaization :</p>
            <br>
            <form action="/filteringdoctor/{{$patient->id}}"
            method=get
            >
              <div class="input-group">
              <select class="form-control"
                        name="spicilization"
                        
                         >
                        <option
                        
                       
                        value="Endodontictreatment"
                       
                       >Endodontictreatment</option>
                        <option
                        value="bridges"
                       
                        
                         >bridges</option>
                        <option
                        value="jawsurgery"
                      
                        
                        >jawsurgery</option>
                        <option
                        value="orthodontics"
                       
                       
                        >orthodontics</option>
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
