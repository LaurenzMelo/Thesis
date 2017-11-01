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
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption|Sanchez|Ovo|Montserrat|Raleway|Montserrat+Alternates|Lato|Open+Sans|Ubuntu|PT+Sans" rel="stylesheet">

		<link rel="stylesheet" href="style.css">

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

			$(function () { 
				$(".answer").hide();

				$("#question1").click(function(){
					$("#panel1").slideToggle(500);
					$(this).find('span').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
				});

				$("#question2").click(function(){
					$("#panel2").slideToggle(500);
					$(this).find('span').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
				});

				$("#question3").click(function(){
					$("#panel3").slideToggle(500);
					$(this).find('span').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
				});
			});

		</script>
	</head>
	<body>
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
							<li><a href="#" style="color:white; background-color:#0069FF; border-bottom:0">Book Now</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>

		<section class="second">
			<br><br><br><br><br><br>
			<div class="container">
				<div class="col-md-3">
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="text-center">
					  <div class="panel panel-primary">
					    <div class="panel-heading" style="font-family: 'PT Sans', sans-serif; font-size:150%; font-weight:bold; background-color: #0069FF"> Frequently Asked Questions</div><br>

					    <div class="panel-group">

					    	<div class="panel panel-info">
						      <div class="panel-header question" id="question1">
						      	Question <span class="pull-right glyphicon glyphicon-plus-sign" id="glyph-toggle1"> </span>
						      </div>
						      <div class="panel-body answer" id="panel1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
						      Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
						    </div>
						    <br>

						    <div class="panel panel-info">
						      <div class="panel-header question" id="question2">	
						      	Question <span class="pull-right glyphicon glyphicon-plus-sign" id="glyph-toggle2"> </span>
						      </div>
						      <div class="panel-body answer" id="panel2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
						    </div>
						    <br>

						    <div class="panel panel-info">
						      <div class="panel-header question" id="question3">	
						      	Question <span class="pull-right glyphicon glyphicon-plus-sign" id="glyph-toggle3"> </span>
						      </div>
						      <div class="panel-body answer" id="panel3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
						    </div>
						    <br>

					    </div>
					  </div>	
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>
			<br><br><br>
			<hr style="border-color: #C2C2C2;">
		</section>

		<div class="container-fluid" style="background-color: white">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="text-center">
						<p class="footer-header" style="font-family: 'Sanchez', serif;">Contact Us</p>
						<p class="footer-body"><span class="glyphicon glyphicon-phone"></span> 0926 628 9837
						<br><span class="glyphicon glyphicon-envelope"></span> emyrson7@yahoo.com
						<br><span class="glyphicon glyphicon-flag"></span> Purok 5, Liozon,<br>Palauig, Zambales</p>
					</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="text-center">
						<p class="footer-header" style="font-family: 'Sanchez', serif;">Follow Us</p>
						<p class="footer-body"><a href="https://www.facebook.com/BlueSpruceBeachResortPhilippines/" ><i class="fa fa-facebook" aria-hidden="true"></i></a> Blue Spruce Beach Resort</p>
					</div>
				</div>
				
				<div class="col-md-7">
					<br><br><br><br><br>
					<p class="text-right" style="padding:5px; font-family: 'Montserrat', sans-serif; color:#333;"><big>&copy;</big> 2008 - 2017 Blue Spruce Beach Resort</p>
				</div>
			</div>
		</div>
	</body>
</html>