<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Index</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

		<script src="jquery-3.2.1.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
		<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption|Sanchez|Ovo|Montserrat|Raleway|Montserrat+Alternates|Lato|Open+Sans|Ubuntu|PT+Sans|Nunito" rel="stylesheet">

		<link rel="stylesheet" href="style.css">
		<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>

		<script>
			jQuery(document).ready(function() {

				  var navOffset = jQuery(".navbar").offset().top;

				  jQuery(window).scroll(function() {

				    var scrollPos = jQuery(window).scrollTop();
				    jQuery(".navbar").stop(true);

				    if (scrollPos > navOffset) {
				      jQuery(".navbar").addClass(".navbar-fade");
				      jQuery(".navbar").fadeTo(1, 0.6);

				    } else {
				      jQuery(".navbar").removeClass(".navbar-fade");
				      jQuery(".navbar").fadeTo(1 , 1);
				    }
				  });
				});

			$(function(){
				$("#check-in-date").datepicker({
					showOn: "button",
		      buttonImage: "Images/calendar.gif",
		      buttonImageOnly: true,
		      buttonText: "Select date",
		      minDate: 0
				});


				$("#check-out-date").datepicker({
					showOn: "button",
		      buttonImage: "Images/calendar.gif",
		      buttonImageOnly: true,
		      buttonText: "Select date",
		      minDate:0,
		      maxDate:4
		    });
			});




			

		</script>
	</head>


	<body style="height:1000%">
		<section>
			<nav class="navbar navbar-fixed-top navbar-fade navbar2">
				<div class="container">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#myNavbar" style="border-color: #0069FF;">
						<span class="icon-bar" style="background-color:#337AB7;"></span>
						<span class="icon-bar" style="background-color:#337AB7;"></span>
						<span class="icon-bar" style="background-color:#337AB7;"></span>                        
					</button>
					<a class="navbar-brand" href="#"><img src="Images/logo.jpg" class="img-rounded" style="width:160px"></a>
				 </div>
					<div class="collapse navbar-collapse pull-right" id="myNavbar">
						<ul class="nav navbar-nav navbar-right heading-font text-center">
							<li><a href="index.php" style="color:#555">HOME <span class="glyphicon glyphicon-home"></span></a></li>
							<li><a href="rooms.php" style="color:#555">ROOMS <span class="glyphicon glyphicon-list-alt"></span></a></li>
							<li><a href="aboutus.php" style="color:#555">ABOUT US <span class="glyphicon glyphicon-user"></span></a></li>
							<li><a href="FAQ.php" style="color:#555">F A Q <span class="glyphicon glyphicon-question-sign"></span></a></li>
							<li><a href="reservationProper.php" style="color:white; background-color:#0069FF; border-bottom:0">Book Now</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>
		

		<section>
			<div class="container-fluid fixed">
				<div class="col-md-12 col-xs-12">
					<label id="check-in" >Check-in Date:</label>
					<input type="text" placeholder="Check-in Date" size="30px" id="check-in-date" readonly="true">
					<label id="check-out" >Check-out Date:</label>
					<input type="text" placeholder="Check-out Date" size="30px" id="check-out-date" readonly="true">
					<label id="num-guests" >Number of Guests:</label>
					<input type="number" min="1" max="20" placeholder="Number of Guests" size="34px" id="guest">
					<input type="submit" value="Check Dates" id="sub-button">
				</div>
				<br><br><br> 
				<hr style="border-color: #C2C2C2; width:113%; position:relative; left:-15px">
			</div>
		</section>

		<div class="container text-center page">
			<ul class="pagination pagination-lg">
		    <li class="active"><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
	  	</ul>
  	</div>

	</body>
</html>