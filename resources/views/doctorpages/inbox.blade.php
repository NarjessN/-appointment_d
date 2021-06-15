
@extends('doctorpages.master')
@section('content')
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">
                            inbox
                            </h2>
                           
                        </div>
                    </div>
                    <!-- Page Heading end-->

                    <!-- panel start -->
                    <div class="panel panel-primary filterable">

                        <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">List of appoinment request</h3>
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
                                    <!-- <th><input type="text" class="form-control" placeholder="patient Ic" disabled></th> -->
                                    <th><input type="text" class="form-control" placeholder=" patientFName" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="patientLName" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="telephoneNumber" disabled></th>
                                    <!-- <th><input type="text" class="form-control" placeholder="Email" disabled></th> -->
                                    <!-- <th><input type="text" class="form-control" placeholder="Gender" disabled></th> -->
                                    <!-- <th><input type="text" class="form-control" placeholder="Status" disabled></th> -->
                                    <!-- <th><input type="text" class="form-control" placeholder="Birthdate" disabled></th> -->
                                    <th><input type="text" class="form-control" placeholder="Description" disabled></th>
                                    <!-- <th><input type="text" class="form-control" placeholder="Starttime" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Endtime" disabled></th> -->
                                    <th><input type="text" class="form-control" placeholder="Day" disabled></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($inbox as $request)
                            @foreach($patients as $patient)
                            @if($patient->id == $request->pateintid )
                            @if($request->appoinmentstatus =="non")
                               <tr>
                             
                                   <td>{{$patient->fname}}</td>                                
                                   <td>{{$patient->lname}}</td>
                                   <td>{{$patient->telephonenumbers}}</td>
                                  
                                    <td>{{$request->description}}</td>
                                    <td>{{$request->day}}</td>
                                   

                                    
                                    <td class='text-center'><span>
                                    
                                    <a href ="/setappoinment/{{$request->id}}" class ="btn btn-success">
                                    accepte
                                    </a>
                                    </span>
                                    </td>
                                    <td>
                                    <span >
                                    <button type="button" 
                                    class="btn btn-danger">delete</button>
                                    </span>
                            </td>
                             
                            
                                </tr>
                                @endif
                                @endif
                                @endforeach 
                                @endforeach

                          </tbody> 
                            
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->

                </div>
            </div>
        <!-- /#wrapper -->
        @endsection  
