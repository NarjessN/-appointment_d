    @extends('doctorpages.master')
    @section('content')

    <div id="page-wrapper">
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
    <div class="col-lg-12">
    <h2 class="page-header">
    Doctor Profile
    </h2>
    <!-- <ol class="breadcrumb">
    <li class="active">
    <i class="fa fa-calendar"></i> Doctor Profile
    </li>
    </ol> -->
    </div>
    </div>

    <!-- panel start -->
    <div class="panel panel-primary">

    <!-- panel heading starat -->
    <div class="panel-heading">
        <h3 class="panel-title">Doctor Details</h3>
    </div>
    <!-- panel heading end -->

    <div class="panel-body">
    <!-- panel content start -->
        <div class="container">
    <section style="padding-bottom: 50px; padding-top: 50px;">
    <div class="row">
    <!-- start -->
    <!-- USER PROFILE ROW STARTS-->
    <div class="row">
    <div class="col-md-3 col-sm-3">
        
        <div class="user-wrapper">
            <img src=" {{asset('assets/img/1.jpg')}}" class="img-responsive" />
            <div class="description">
                <h4> Dr.{{$doctor->fname}} {{$doctor->lname}} </h4>
                <!-- <h5> <strong> Doctor </strong></h5> -->
                
                <hr />
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-sm-9  user-wrapper">
        <div class="description">
            <h3>  </h3>
            <hr />
            
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    
                    <table class="table table-user-information" align="center">
                        <tbody>
                            
                            
                            <tr>
                                <td>first name </td>
                                <td>{{$doctor->fname}}</td>
                            </tr>
                            <tr>
                                <td>last name </td>
                                <td>{{$doctor->lname}}</td>
                            </tr>
                            <tr>
                                <td>birthday</td>
                                <td>{{$doctor->birth}}</td>
                            </tr>
                            <!-- <tr>
                                <td>gender</td>
                                <td>
                                </td>
                            </tr> -->
                            <tr>
                                <td>spicilaization</td>
                                <td>
                                {{$doctor->spicilization}}
                                </td>
                            </tr>
                            <tr>
                                <td>clinic address</td>
                                <td>
                                {{$doctor->addressclnic}}
                                </td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>
                                {{$doctor->email}}
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        
    </div>
    </div>
    <!-- USER PROFILE ROW END-->
    <div class="col-md-4">

    <!-- Large modal -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form action="/editeprofile/{{$doctor->id}}/{{$doctor}}" method="post" >
                        <table class="table table-user-information">
                        @csrf
                            <tbody>
                                
                                <tr>
                                    <td>First Name:</td>
                                    <td><input type="text" class="form-control" name="FirstName" value="{{$doctor->fname}}"  />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td><input type="text" class="form-control" name="LastName" value="{{$doctor->lname}}"  />
                                    
                                    </td>
                                </tr>
                    
                                <tr>
                                    <td>spicilaization</td>
                                    <td><input type="text" class="form-control" name="spicilization" value="{{$doctor->spicilization}}"  /></td>
                                </tr>
                                <tr>
                                    <td>clinic address</td>
                                    <td><input type="text" class="form-control" name="addressclnic" value="{{$doctor->addressclnic}}"  /></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input class="form-control" name="email"  value="{{$doctor->email}}" /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input
                                            type="submit" name="submit" class="btn btn-info"
                                            value="Update Info"></td>
                                    </tr>
                                </tbody>
                                
                            </table>
                            
                            
                            
                        </form>
                        <!-- form end -->
                    </div>
                    
                </div>
            </div>
        </div>
        <br /><br/>
    </div>

    </div>
    <!-- panel content end -->
    <!-- panel end -->
    </div>
    </div>
    <!-- panel start -->

    </div>
    </div>
    <!-- /#wrapper -->

    @endsection  


