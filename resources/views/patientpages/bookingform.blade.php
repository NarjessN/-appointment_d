<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('asset_bookingform/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_bookingform/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('asset_bookingform/css/style.css')}}">
    <title>Booking Form   </title>
        <link rel="shortcut icon" href="{{asset('images/hdoc2.png')}}">
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
                            <div >
                            Patient Name: {{$patient->fname}} - {{$patient->lname}} <br>
                      
													
                          </div>
                              </div>
                              <div class="row form-row">
                            <div >
                            
                            Contact Number: {{$patient->telephonenumbers}} <br>
                          </div>
                              </div>
                              <div class="row form-row">
                            <div >
                            
                            Chronic diseases: {{$patient->diseases}} <br>
                          </div>
                              </div>
                               <div class="row form-row">
                   
  <textarea name="description" class="form-control" rows="5" id="comment"
  placeholder="describe your satuation" required
  >{{old('description')}}</textarea>
                            </div>
                            
                            

                             <div class="row form-row">
                                <div class="col-sm-6">
                            
                           
                            </div>
                          
                            <br>
                             <div class="row form-row">
                             <label for="appt">Appoinmnet date :</label>
                              <input id="dat" type="date" 
                              placeholder="Appointment Date" class="form-control"
                              name="day"
                              required
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