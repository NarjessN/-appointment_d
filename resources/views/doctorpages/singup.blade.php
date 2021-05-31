<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HelloDoc</title>

    
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
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

    form * {
        margin-bottom: 10px;
    }
    </style>
</head>
<body>

    <div class="main">
        

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                    <div style="margin-left:120px;">
                        <a href="#" ><img src="images/hdoc2.png" style="margin-right:10px; margin-left:5px;"></a>
                        <a class="navbar-brand" href="#">HelloDoc</a>
                    </div>
                      </nav>


        <div class="container" style="width:35%; height:80%; float:left; margin-left:120px; ">
            <form method="POST" class="signup-form" id="signup-form" action="{{route('Doctor-Singup')}}">
                <h2>SIGNUP</h2>
                @csrf
                <div class="">
                    
                    <input type="text" name="fname" id="fname" placeholder="First Name" required />
                    <input type="text" name="lname" id="lname" placeholder="Last Name" required />
                    <input type="date" name="birth" id="birth" placeholder="birthday" required />
                    <table>
                    <tr>
                        <td><input type="radio" name="gender" value="M" style="display:inline;"></td>
                        <td><label for="gender">Male</label></td>
                    </tr> 
                    <tr>
                    <td><input type="checkbox" name="gender" value="F" style="display:inline;"></td>
                    <td><label for="gender">Female </label></td>
                    </tr>
                    </table>
                    <!-- we should make it dropdown  -->
                    <textarea class="form-control" name ="spicilization" rows="5" id="comment" placeholder="Specialization" required></textarea>
                    <textarea  name ="addressclnic"class="form-control" rows="5" id="comment" placeholder="clininc address " required></textarea>
                    <input type="file" name="image" placeholder="image" required />
                    <input type="email" name="email" placeholder="Email ID" required />
                    <input type="password" name="pswd" placeholder="Password" required />
                    <input type="password" name="cpswd" placeholder="confirmpassword" required />
                    
                </div>
                
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="SIGN UP" style="margin:0 auto;"/>
                </div>

                <a href="/doclogin" style="margin-left:70px;">Already registered? Login!</a>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery-1.12.4.min.js"></script>
</body>
</html>