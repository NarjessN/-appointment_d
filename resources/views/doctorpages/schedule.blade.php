@extends('doctorpages.master')
@section('content')
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
                                action="/doctorschedule/1/{request}"
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
                            <h3 class="panel-title">List of Patients</h3>
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
                                    <th><input type="text" class="form-control" placeholder="scheduleId" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="scheduleDate" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="scheduleDay" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="startTime." disabled></th>
                                    <th><input type="text" class="form-control" placeholder="endTime" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="bookAvail" disabled></th>
                                    
                                </tr>
                            </thead>
                            
                               <tbody>
                               <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                    <td></td>
                                    <td></td>
                                   <td></td>
                                    <form method='POST'>
                                    <td class='text-center'><span><button type="button" 
                                    class="btn btn-warning">edite</button>
                                    </span>
                                    </td>
                                    <td>
                                    <span >
                                    <button type="button" 
                                    class="btn btn-danger">delete</button>
                                    </span>
                            </td>
                            </form>   
                            
                                </tr>
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

        @endsection  
  