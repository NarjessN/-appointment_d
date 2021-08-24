
<!DOCTYPE html>
<html lang="ar"

>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>changepassword</title>
    <link rel="shortcut icon" href="{{asset('images/hdoc2.png')}}">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/doclogin.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
        <!-- <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet"> -->


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
                        <!-- <a href="#" ><img src="images/hdoc2.png" style="margin-right:10px; margin-left:5px;"></a> -->
                        <a class="navbar-brand" href="/">EAbooking</a>
                    </div>
                      </nav>

        <div class="container" style="width:35%; height:80%; float:left; margin-left:120px; margin-top:100px;">
            <form method="POST" class="login-form" action="/storepassword/{{$id}}">
            @if(Session::has('fail'))
                <div class="alter alter-danger">
                {{Session::get('fail')}}
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alter alter-danger">
                {{Session::get('success')}}
                </div>
                @endif
            @csrf
                <h3>change password </h3>
                <div class="form-group-1">
                        <input type="password" name="oldpassword"
                        required
                         placeholder="Enter  old Password">
                        <span class="text-danger">@error('oldpassword'){{$message}} @enderror
                    </span>
                    <input type="password" name="newpassword"
                        required
                         placeholder="Enter  new Password">
                         <span class="text-danger">@error('newpassword'){{$message}} @enderror
                    </span>
                         <input type="password" name="confirmpassword"
                        required
                         placeholder="confirm password ">
                         <span class="text-danger">@error('confirmpassword'){{$message}} @enderror
                    </span>
                </div>
                <div class="form-submit">
                    <input type="submit" class="btn btn-primary" value="submite" />
                </div>
               
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>