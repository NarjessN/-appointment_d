   
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Welcome Dr  </title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('doctor/assets/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/css/material.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('doctor/assets/css/sb-admin.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/css/time/bootstrap-clockpicker.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('doctor/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <!-- Custom Fonts -->
    </head>
    <body>
    <div id="">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="/doctorprofile/{{$id}}">Welcome Dr  {{$doctor->fname}}  </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/doctorschedule/{{$id}}"><i class="fa fa-fw fa-table"></i> DoctorSchedule</a>
                </li>
                <li>
                    <a href="/doctorinbox/{{$id}}"><i class="fa fa-fw fa-edit"></i> inbox</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
             <li>
                <a href="doctordashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="addschedule.php"><i class="fa fa-fw fa-table"></i> Doctor Schedule</a>
            </li>
            <li>
                <a href="patientlist.php"><i class="fa fa-fw fa-edit"></i> Patient List</a>
            </li>
        </ul>
    </div> -->
    <!-- /.navbar-collapse -->
</nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">
                            Doctor Schedule
                            </h2>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-calendar"></i> Schedule
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- Page Heading end-->

                    <!-- panel start -->
                    <div class="panel panel-primary">

                        <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Schedule</h3>
                        </div>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                            <div class="bootstrap-iso">
                             <div class="container-fluid">
                              <div class="row">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <form class="form-horizontal" method="post"
                                action="/doctorschedule/{{$id}}/{request}"
                                >
                                @csrf
                                 
                                 <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="scheduleday">
                                   Day
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                  
                                  <label class="checkbox-inline">
                                <input type="checkbox" name ="SANDAY" value="1">SANDAY
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name ="MONDAY" value="1">MONDAY
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox"  name ="TUESDAY"value="1">TUESDAY
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name ="WENESDAY" value="1">WENESDAY
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name ="THURSDAY" value="1">THURSDAY
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox"  name ="FRIDAY"value="1">FRIDAY
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox"  name =" SATURDAY"value="1">SATURDAY
                                </label>
                                  </div>
                                 </div>
                                
                                 <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="starttime">
                                   Start Time
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>

                                  <div class="col-sm-10">
                                   <div class="input-group clockpicker"  data-align="top" data-autoclose="true">
                                    <div class="input-group-addon">
                                     <i class="fa fa-clock-o">
                                     </i>
                                    </div>
                                    <input class="form-control" id="starttime" name="starttime" type="time" required/>
                                   </div>
                                  </div>
                                 </div>
                                 <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="endtime">
                                   End Time
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <div class="input-group clockpicker"  data-align="top" data-autoclose="true">
                                    <div class="input-group-addon">
                                     <i class="fa fa-clock-o">
                                     </i>
                                    </div>
                                    <input class="form-control" id="endtime" name="endtime" type="time" required/>
                                   </div>
                                  </div>
                                 </div>
                                 <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="starttime">
                                   Doctor Note
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>

                                  <div class="col-sm-10">
                                   <div class="input-group clockpicker"  data-align="top" data-autoclose="true">
                                   
                                   <textarea class="form-control" rows="5" id="comment" name="note" require></textarea>
                                   </div>
                                  </div>
                                 </div>
                                 </div> 
                                 
                                 <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                   <button class="btn btn-primary " name="submit" type="submit"
                                   
                                   >
                                    Submit
                                   </button>
                                  </div>
                                 </div>
                                </form>
                               </div>
                              </div>
                             </div>
                            </div>                        
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->

                     <!-- panel start -->
                    <div class="panel panel-primary filterable">

                        <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">List of workingday</h3>
                            <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
                        </div>
                        </div>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                           <!-- Table -->
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="starttime" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="edtime" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="days." disabled></th>
                                    <th><input type="text" class="form-control" placeholder="note" disabled></th>
                                    
                                 
                                    
                                </tr>
                            </thead>
                            
                               <tbody>
                               @foreach($workingdaylist as $workingday)
                               <tr>
                             
                                   <td>{{$workingday->startime}}</td>
                                   <td>{{$workingday->endtime}}</td>
                                   
                                   <td>
                                   @if($workingday->SANDAY =='1')
                                   SANDAY-
                                   @endif
                                   @if($workingday->MONDAY =='1')
                                   MONDAY-
                                   @endif
                                   @if($workingday->TUESDAY =='1')
                                   TUESDAY-
                                   @endif
                                   @if($workingday->WENESDAY =='1')
                                   WENESDAY-
                                   @endif
                                   @if($workingday->THURSDAY =='1')
                                   THURSDAY-
                                   @endif
                                   @if($workingday->FRIDAY =='1')
                                   FRIDAY-
                                   @endif
                                   @if($workingday->SATURDAY =='1')
                                   SATURDAY-
                                   @endif
                                   
                                   </td>
                                  
                                   <td>{{$workingday->note}}</td>
                                   
                                    
                                    <td class='text-center'><span>
                                    <a href="/workingday/{{$workingday->id}}" 
                                    class="btn btn-warning">edite</a>
                                    </span>
                                    </td>

            
                                    <td class='text-center'><span>
                                    <a 
                                    href="/delete/{{$workingday->id}}"
                                    class="btn btn-danger">delete</a>
                                    </span>
                                    </td>
                             
                            
                                </tr>
                                @endforeach
                          </tbody>
                       </table>
                       <!-- <div class='panel panel-default'>
                       <div class='col-md-offset-3 pull-right'>
                       <button class='btn btn-primary' type='submit' value='Submit' name='submit'>Update</button>
                        </div>
                        </div> -->
                        
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->
                </div>
            </div>
        <!-- /#wrapper -->

       
    <script src="{{asset('assets/js/jquery.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('doctor/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('doctor/assets/js/bootstrap-clockpicker.js')}}"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->
        </body>
    </html>  
  