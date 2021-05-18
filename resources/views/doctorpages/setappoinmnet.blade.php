
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Make Appoinment</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<link href="assets/css/default/blocks.css" rcel="stylesheet">


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
										
										
										<form class="form" role="form" method="POST" accept-charset="UTF-8">
											<div class="panel panel-default">
												<div class="panel-heading">Patient Information</div>
												<div class="panel-body">
													
													Patient Name: <br>
													Patient IC: <br>
													Contact Number: <br>
													Address: 
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
												<select class="form-control" id="sel1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            <label for="recipient-name" class="control-label">Time:</label>
                                            <input type="time" id="appt" name="appt">
											</div>
											<div class="form-group">
												<label for="message-text" class="control-label">Note:</label>
												<textarea class="form-control" name="comment" required></textarea>
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
					<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
				</body>
			</html>