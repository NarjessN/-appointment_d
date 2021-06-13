<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('asset_bookingform/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_bookingform/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('asset_bookingform/css/style.css')}}">
  </head>

    <body>
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Opening Hours </h1>
                        @foreach($workingdays as $workingday)
                        <br>
                        <h2> {{$workingday->startime}} - {{$workingday->endtime}}</h2>
                        <h2>
                        @if($workingday->SANDAY==1)
                        SANDAY-
                        @endif
                        @if($workingday->MONDAY ==1)
                        MONDAY-
                        @endif
                        @if($workingday->TUESDAY ==1 )
                        TUESDAY-
                        @endif
                        @if($workingday->WENESDAY ==1)
                        WENESDAY-
                        @endif
                        @if($workingday->THURSDAY ==1)
                        THURSDAY-
                        @endif
                        @if($workingday->FRIDAY ==1)
                        FRIDAY
                        @endif
                        @if($workingday->SATURDAY ==1)
                        SATURDAY
                        @endif
                        </h2>
                        <h3> Note : {{$workingday->note}} </h3>
                       <br>
                       @endforeach
                       <!-- <br>
                        <h2> 10:00 - 12:00</h2>
                        <h2> sunday - monday - tusday</h2>
                        <h3> Note : somthing is happing </h3>
                       <br> -->
                       <!-- <br>
                        <h2> 10:00 - 12:00</h2>
                        <h2> sunday - monday - tusday</h2>
                        <h3> Note : somthing is happing </h3>
                       <br> -->
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointemnt</h2>
                        </div>
                        <div class="form-body">
                        <form  action ="/storebooking/{{$patient->id}}/{{$iddocotr}}" method="post">
                        @csrf
                            <div class="row form-row">
                              <input type="text"  class="form-control"
                              value="{{$patient->fname}}"
                              name="fname"
                              
                              >
                            </div>
                            <div class="row form-row">
                              <input type="text" 
                              value="{{$patient->telephonenumbers}}"
                              name="telephonenumbers"
                               class="form-control">
                            </div>
                             <!-- <div class="row form-row">
                              <input type="text" placeholder="Enter Email Adreess" class="form-control">
                            </div> -->
                           <!-- <div class="row form-row">
                              <input id="dat" type="text" placeholder="Appointment Date" class="form-control">
                            </div> -->
                               <div class="row form-row">
                              <textarea type="text" placeholder="description" class="form-control"
                              name="description"
                              >
                                </textarea>
                            </div>
                            
                            <h6> Apoinment date</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                            
                            <!-- <label for="appt">Start time  a time:</label>
                                <input type="time" 
                                id="time"
                                 name="time"  
                                class="form-control"
                                placeholder="start time"
                                >
                                </div> -->
                                <!-- <div class="col-sm-6">
                                <label for="appt">End time :</label>
                                <input type="time"
                                 id="time"
                                  name="time"  placehlder = "end time" class="form-control">
                                </div> -->
                            </div>
                             <!-- <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter State" class="form-control">
                                </div> -->
                                <!-- <div class="col-sm-6">
                                   <input type="text" placeholder="Postal Code" class="form-control">
                                </div>
                            </div> -->
                            <br>
                             <div class="row form-row">
                             <label for="appt">Appoinmnet date :</label>
                              <input id="dat" type="date" placeholder="Appointment Date" class="form-control"
                              name="day"
                              >
                            </div>
                                <br>
                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment"
                               type="submit"
                               >
                                 Book Appointment
                               </button>
                             
                            </div>
</form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      
    </body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('asset_bookingform/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('asset_bookingform/js/popper.min.js')}}"></script>
    <script src="{{asset('asset_bookingform/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset_bookingform/js/bootstrap-datepicker.js')}}"></script>

    <!-- <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script> -->
    
  </body>
</html>