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
    <link rel="stylesheet" href="css/js/bootstrap.min.js">
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
            <form method="POST" class="signup-form" id="signup-form"
            enctype="multipart/form-data"
             action="{{route('Doctor-Singup')}}">
             @if(Session::has('fail'))
                <div class="alert alert-danger" role="alert">
                {{Session::get('fail')}}
                </div>
                @endif
                <h2>SIGNUP</h2>
              
                @csrf
                <div class="">
                    
                    <input type="text" name="fname" id="fname" placeholder="First Name" value="{{old('fname')}}"
                     required />
                     <span class="text-danger">@error('fname'){{$message}} @enderror
                    </span>
                    <input type="text" name="lname" id="lname" placeholder="Last Name" 
                    value="{{old('lname')}}"
                    required />
                    <span class="text-danger">@error('lname'){{$message}} @enderror
                    </span>
                    <input type="date" name="birth" id="birth" placeholder="birthday" 
                    value="{{old('birth')}}"
                    required />
                     <table>
                    <tr>
                    <td><label for="gender">Female</label>
                    <input type="radio" name="gender" value="FM" style="display:inline;">
                   <td> <label for="gender">Male </label>
                    <input type="radio" name="gender" value="M" style="display:inline;">
                     </td>
                    </td>
                    </tr>
                    </table>
                    <!-- <table>
                    <tr>
                    <td><label for="gender">F </label>
                    <input type="radio" name="gender" value="FM" style="display:inline;">
                    </td>
                    </tr>
                    <tr>
                    <td><label for="gender">male </label>
                    <input type="radio" name="gender" value="M" style="display:inline;">
                    </td>
                    </tr>
                    </table>
                  -->
                    <!-- we should make it dropdown  -->
                    <!-- <textarea class="form-control" name ="spicilization" rows="5" id="comment" placeholder="Specialization" required></textarea> -->
                    <div class="input-group">
                        <select class="form-control"
                        name="spicilization"
                        required
                         >
                         <option disabled selected value> 
                         -- select an spicilization -- </option>
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
                    </div>
                    <textarea  name ="services"class="form-control" rows="5" id="comment"
                     placeholder="The doctor talks about himself and the services he provides " required
                     
                     ></textarea> 
                     <span class="text-danger">@error('services'){{$message}} @enderror
                    </span>         
                    <textarea  name ="addressclnic"class="form-control" rows="5" id="comment"
                     placeholder="clininc address " required
                     
                     ></textarea>      
                   
                     <span class="text-danger">@error('clinicid'){{$message}} @enderror
                    </span>
                     <input type="text" name="clinicid" placeholder="clinic id"
                     required
                     />
                   
                     <label for="img">Select image:</label>
                    <input type="file" name="image" placeholder="image"
                     />
                     <span class="text-danger">@error('image'){{$message}} @enderror
                    </span>
                    <input type="email" name="email" placeholder="Email ID" required
                    value="{{old('email')}}"
                     />
                    <input type="password" name="pswd" placeholder="Password" required />
                    <input type="password" name="cpswd" placeholder="confirmpassword" required />
                        <span class="text-danger">@error('cpswd'){{$message}} @enderror
                        </span>
                        <!-- <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> I have a bike</label> -->
                    <table>
                    <tr>
                    <td>
                    <input type="checkbox" name="Association" value="true" style="display:inline;">
                    <label for="gender" >I am a member of the Dental Association</label>   
                    </td>
                    </tr>
                    </table> 
                </div>
                
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="SIGN UP" style="margin:0 auto;"/>
                </div>

                <a href="/doctorsingin" style="margin-left:70px;">Already registered? Login!</a>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery-1.12.4.min.js"></script>
</body>
</html>