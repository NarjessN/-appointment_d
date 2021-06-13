
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Make Appoinment</title>
		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/default/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/default/blocks.css')}}" rcel="stylesheet">


		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

	</head>
	<body>
		<!-- navigation -->
		
		<!-- navigation -->
		<div class="container">
			<section style="padding-bottom: 50px; padding-top: 50px;">
				<div class="row">
					<!-- start -->
					<!-- USER PROFILE ROW STARTS-->
					<div class="row">
						
						
						<div class="col-md-9 col-sm-9  user-wrapper">
							<div class="description">
								
								
								<div class="panel panel-default">
									<div class="panel-body">
										
									
										<form class="form" role="form" method="POST"
										action="/sendappoinment/{{$request->id}}"
										 accept-charset="UTF-8">
											<div class="panel panel-default">
												<div class="panel-heading">Patient Information</div>
												<div class="panel-body">
												@csrf
													Patient Name: {{$patient->fname}} - {{$patient->lname}} <br>
													
													Contact Number: {{$patient->telephonenumbers}} <br>
													description: {{$request->description}}
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">Appointment Information</div>
												<!-- <div class="panel-body">
													Day:    <br> 
													Date: <br>
													Time: - <br>
												</div> -->
                                                <div class="form-group">
												<label for="recipient-name" class="control-label">Day:</label>
												<input id="dat" type="date" placeholder="Appointment Date" class="form-control"
                           						   name="day"
                            						  >
                                            <label for="recipient-name" class="control-label">Time:</label>
                                            <input type="time" id="appt" name="time">
											</div>
											<div class="form-group">
												<label for="message-text" class="control-label">doctor Note :</label>
												<textarea class="form-control" name="comment"
												
												 required
												 value=
												></textarea>
											</div>
											</div>
											
										
											<div class="form-group">
												<input type="submit" name="appointment" id="submit" class="btn btn-primary" value="Make Appointment">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<script src="{{asset('assets/js/jquery.js')}}"></script>
			<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
				</body>
			</html>