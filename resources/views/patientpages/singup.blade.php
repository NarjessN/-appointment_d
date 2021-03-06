<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Singup</title>

    
    <!-- Main css -->
    <link rel="stylesheet" href="css/patstyle.css">
    <link rel="stylesheet" href="css/app.css">
    <style>

body{
/* The image used */
background-image: url("images/dental-treatment.jpg");

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
    form * {
        margin-bottom:10px;
    }
    .container {
        padding-bottom:0px;
        margin-top: 7px;
    }

    .signup-form {
        padding-bottom: 30px;
    }

    .form-check {
        margin-bottom: 0px;
    }

    td {
        vertical-align: middle;
    }
    td input {
        vertical-align: top;
         
    }
    td label {
        margin-left: 3px;
    }
    </style>
</head>
<body>

    <div class="main">
        

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark"
             style="margin-bottom:0px; background-color: #1ea160">
                    <div style="margin-left: 120px;">
                        <a href="/patdash" class="navbar-left"><img src="images/hdoc2.png" 
                        style="margin-right:10px; margin-left:5px;"></a>
                        <a class="navbar-brand" href="/">EAbooking</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                        aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              {{-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> --}}
                            </li>
                            <li>
                            </li>
                            
                          </ul>
                          <form class="form-inline my-2 my-lg-0" 
                          action="/drsearch" style="margin-right:200px;" method="POST">
                            
                          </form>
                          {{-- <span style="margin-left: 20px;"></span>
                          <a href="/patdash"><button class="navbar-right btn btn-light">Dashboard</button></a> --}}
                          {{-- <form action="/plogout">
                            <input type="submit" class="navbar-right btn btn-light" style="margin-left:20px;" value="Logout">
                          </form> --}}
                        </div>
                    </div>
                      </nav>

        <div class="container" style="width:35%; height:80%; float:left; margin-left:120px; ">
            <form method="post" class="signup-form"
            enctype="multipart/form-data"
             action="/patientregiste">
                <h2>SIGNUP</h2>
                @csrf
                <div class="form-group-1">
                <span class="text-danger">@error('fname'){{$message}} @enderror
                    </span>
                    <input type="text" name="fname" id="fname" placeholder="First Name" required 
                    value="{{old('fname')}}"
                    />
                    <span class="text-danger">@error('lname'){{$message}} @enderror
                    </span>
                    <input type="text" name="lname" id="lname" placeholder="Last Name" 
                    value="{{old('lname')}}"
                    required />
                    <textarea  name ="diseases"class="form-control" rows="5" id="comment"
                     placeholder="Chronic diseases such as heart disease or diabetes" required
                     
                     >{{old('diseases')}}</textarea> 
                    <input type="file" name="image" placeholder="image" required />
                    <span class="text-danger">@error('telephonenumbers'){{$message}} @enderror
                    </span>
                    <input type="number" name="telephonenumbers"
                    value="{{old('telephonenumbers')}}"
                     placeholder="Phone Number" required />

                    <input type="email" name="email" placeholder="Email ID" 
                    value="{{old('email')}}"
                    required />
                    <span class="text-danger">@error('password'){{$message}} @enderror
                    </span>
                    <input type="password" name="password" placeholder="Enter Password" required />
                    <span class="text-danger">@error('pswd'){{$message}} @enderror
                    </span>
                    <input type="password" name="pswd" placeholder="confirm password " required />
                </div>
                
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="SIGN UP" style="margin:0 auto;"/>
                </div>

                <a href="/patientsingin" style="margin-left:70px;">Already registered? Login!</a>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>