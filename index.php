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

			<script type="text/javascript">

				$(document).ready(function(){
					$('.smooth-scroll')
				  .click(function(event) {
				    if (
				      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
				      && 
				      location.hostname == this.hostname
				    ) {
				      
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				      
				      if (target.length) {
				        
				        event.preventDefault();
				        $('html, body').animate({
				          scrollTop: target.offset().top
				        }, 1000, function() {
				          
				          var $target = $(target);
				          $target.focus();
				          if ($target.is(":focus")) { 
				            return false;
				          } else {
				            $target.attr('tabindex','-1');
				            $target.focus();
				          };
				        });
				      }
				    }
				  })
				});

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

				/*$(function() {
					$("#from").datepicker({
						showOn: "both",
						minDate:0,
					});
				});

				$(function() {
					$("#to").datepicker({
						showOn: "both",
						minDate: $("#from").datepicker("getDate"),
						maxDate: 5,
					});
				});*/

				
			</script>

			<link rel="stylesheet" href="style.css">

	</head>

	<body>
		<div class="bg">
			<nav class="navbar navbar-fixed-top navbar-fade">
				<div class="container">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#myNavbar" style="border-color: #0069FF;">
						<span class="icon-bar" style="background-color:#337AB7;"></span>
						<span class="icon-bar" style="background-color:#337AB7;"></span>
						<span class="icon-bar" style="background-color:#337AB7;"></span>                        
					</button>
					<a class="navbar-brand" href="#"><img src="Images/logo.jpg" class="img-rounded" style="width:205px"></a>
				 </div>
					<div class="collapse navbar-collapse pull-right" id="myNavbar">
						<ul class="nav navbar-nav navbar-right heading-font text-center">
							<li><a href="index.php" style="color:#555">HOME <span class="glyphicon glyphicon-home"></span></a></li>
							<li><a href="rooms.php" style="color:#555">ROOMS <span class="glyphicon glyphicon-list-alt"></span></a></li>
							<li><a href="aboutus.php" style="color:#555">ABOUT US <span class="glyphicon glyphicon-user"></span></a></li>
							<li><a href="FAQ.php" style="color:#555">F A Q <span class="glyphicon glyphicon-question-sign"></span></a></li>
						</ul>
						
					</div>
				</div>
			</nav>

			<a href="#"><button type="button" class="btn btn-default btn-book">BOOK NOW</button></a>
			<a href="#here" class="smooth-scroll"><button type="button" class="btn btn-default btn-book2">Know More</button></a>
		</div>
		
		<section class="second">
			<a name="here"></a>
			<br>
			<div class="container-fluid">
				<center><img src="Images/welcome.png" class="img-responsive" style="width:1000px;"></center>
				<div class="col-md-3">	
				</div>
				<div class="col-md-6 col-xs-12 col-sm-4">
					<div class="well well-lg">
							<div class="text-center">
								<h3 class="header2"> <b>Relax and unwind in our cozy and peaceful resort</b></h3>
								<div class="text-justify">
									<p class="text-welcome"> Planning a vacation in the Philippines? Go to the Blue Spruce Beach Resort where you can stay in a hotel room, cottage, or hut. The resort also includes a picnic area, restrooms with showers.</p>
									<p class="text-welcome">  An ideal location for a tropical beach holiday, summer getaway, or even unwinding moment, Blue Spruce Beach Resort is the best place for you. Sitting right next to the West Philippine Sea or formerly known as South China Sea, this astounding resort must be included in anyone’s travel checklist. </p>
								</div>
							</div>
						</div>
				</div>
				<div class="col-md-3">
		</section>

		<section class="bg2">
			<br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-12 col-sm-4 text-center">
						<div class="panel panel-default">
							<img class="img-responsive" src="Images/spot.jpg">
							<div class="panel-body">
								<p class="label-header"><b>Bonding</b></p>
								<p class="panel-content">Enjoy your stay with the family or friends with our unblemished rooms and tidy picnic tables</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-12 col-sm-4 text-center">
						<div class="panel panel-default">
							<img src="Images\view2.jpg" class="img-responsive">
							<div class="panel-body">
								<p class="label-header"><b>Relaxing View</b></p>
								<p class="panel-content">Relax and unwind in our calm ocean where the land meets the West Philippine Sea</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-12 col-sm-4 text-center">
						<div class="panel panel-default">
							<img src="Images\sand.jpg" class="img-responsive">
							<div class="panel-body">
								<p class="label-header"><b>Ambiance</b></p>
								<p class="panel-content">Here, we have ambiance that will awaken the nature-lover part of yourself!</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-12 col-sm-4 text-center">
					<div class="panel panel-default">
						<img class="img-responsive" src="Images/spot.jpg">
						<div class="panel-body">
							<p class="label-header"><b>Bonding</b></p>
							<p class="panel-content">Enjoy your stay with the family or friends with our unblemished rooms and tidy picnic tables</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-xs-12 col-sm-4 text-center">
					<div class="panel panel-default">
						<img src="Images\view2.jpg" class="img-responsive">
						<div class="panel-body">
							<p class="label-header"><b>Relaxing View</b></p>
							<p class="panel-content">Relax and unwind in our calm ocean where the land meets the West Philippine Sea</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-xs-12 col-sm-4 text-center">
					<div class="panel panel-default">
						<img src="Images\sand.jpg" class="img-responsive">
						<div class="panel-body">
							<p class="label-header"><b>Ambiance</b></p>
							<p class="panel-content">Here, we have ambiance that will awaken the nature-lover part of yourself!</p>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>

		

		<section class="second">	
		<br><br><br>
			<div class="container">
				<div class="col-md-4 col-xs-12 col-sm-12 pull-left text-center">
					<h2 style="font-family: 'Sanchez', serif;"> Can't find us? </h2>
					<div class="panel panel-default">
						<div class="panel-header text">
							<p class="footer-header" style="font-family: 'Sanchez', serif;background-color: #0069FF; color:white">Contact Us</p>
						</div>
						<div class="panel-body">
							<p style="font-family: 'Montserrat', sans-serif;"><span class="glyphicon glyphicon-phone"></span> 0926 628 9837</p>
							<p style="font-family: 'Montserrat', sans-serif;"><span class="glyphicon glyphicon-envelope"></span> emyrson7@yahoo.com</p>
							<p style="font-family: 'Montserrat', sans-serif;"><span class="glyphicon glyphicon-flag"></span> Purok 5, Liozon,<br>Palauig, Zambales</p>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-header">
							<p class="footer-header" style="font-family: 'Sanchez', serif; background-color: #0069FF; color:White">Follow Us</p>
						</div>
						<div class="panel-body">
							<p style="font-family: 'Montserrat', sans-serif;"><a href="https://www.facebook.com/BlueSpruceBeachResortPhilippines/" ><i class="fa fa-facebook" aria-hidden="true"></i></a> Blue Spruce Beach Resort</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-xs-12 col-sm-12 pull-right">
					<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43519.98239912469!2d119.92282225847448!3d15.394925263412107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74ace2e3b3e39031!2sBlue+Spruce+Beach+Resort!5e0!3m2!1sen!2sph!4v1508930277488" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<br><br><br>
		</section>
		
		<div class="container-fluid" style="background-color: #555">
			<div class="row">
				<div class="col-md-12">
					<p class="text-right" style="padding:5px; font-family: 'Montserrat', sans-serif; color:white"><big>&copy;</big> 2008 - 2017 Blue Spruce Beach Resort abcdef</p>
				</div>
			</div>
		</div>


	</body>
</html>

