
<!DOCTYPE html>
<html lang="ar"

>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Singin</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/doclogin.css">
    <link rel="stylesheet" href="css/app.css">


    <style>
        .container {
        padding-bottom:0px;
        margin-top: 7px;
    }

    .login-form {
        padding:70px;
    }

    .signup-form {
        padding-bottom: 20px;
    }

    .form-check {
        margin-bottom: 0px;
    }

    form input {
        margin-bottom: 15px;
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
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                    <div style="margin-left:120px;">
                        <a href="#" ><img src="images/hdoc2.png" style="margin-right:10px; margin-left:5px;"></a>
                        <a class="navbar-brand" href="/">EAbooking</a>
                    </div>
                      </nav>

        <div class="container" style="width:35%; height:80%; float:left; margin-left:120px; margin-top:100px;">
            <form method="POST" class="login-form" action="/logincheckd">
            @if(Session::has('fail'))
                <div class="alert alert-danger" role="alert">
                {{Session::get('fail')}}
                </div>
                @endif
           
                <h2>LOGIN</h2>
                @csrf
                <div class="form-group-1">

                        <input type="text" name="clinicid" value ="{{old('clinicid')}}" 
                        required
                        placeholder="Enter ClinicId">
                        <span class="text-danger">@error('clinicid'){{$message}} @enderror
                    </span>
                        <input type="password" name="pswd"
                        required
                         placeholder="Enter Password">
                        <span class="text-danger">@error('pswd'){{$message}} @enderror
                    </span>
                    
                </div>
                <div class="form-submit">
                    <input type="submit" class="btn btn-primary" value="Login" />
                </div>
                <a style="margin-left:60px;" href="/doctorsingup">New User? Sign Up For Free!</a>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>