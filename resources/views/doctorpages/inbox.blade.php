
@extends('doctorpages.master')
@section('content')
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">
                            Patient List
                            </h2>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-calendar"></i> Patient List
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- Page Heading end-->

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
                                    <th><input type="text" class="form-control" placeholder="patient Ic" disabled></th>
                                    <th><input type="text" class="form-control" placeholder=" patientFName" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="patientLName" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Number" disabled></th>
                                    <!-- <th><input type="text" class="form-control" placeholder="Email" disabled></th> -->
                                    <th><input type="text" class="form-control" placeholder="Gender" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Birthdate" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Description" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Starttime" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Endtime" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Day" disabled></th>
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
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>

                                    <form method='POST'>
                                    <td class='text-center'><span><button type="button" 
                                    class="btn btn-success">accepte</button>
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
                            
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->

                </div>
            </div>
        <!-- /#wrapper -->
        @endsection  
