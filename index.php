<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="We at Boundless Care Inc. share a common interest and passion: to care, to serve, to educate, to encourage and to bring hope to clients and their families on living well, being healthy and maximizing their potentials to improve Quality of Life. We are dedicated to providing top – quality services, whether in a private residence or healthcare facility, at affordable rates."/>
	<meta name="twitter:card" value="summary"/>
	<meta property="fb:app_id" content="129726550914924"/>
	<meta property="og:title" content="Boundless Care Inc."/>
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://velox-solution.com/boundlesscare/"/>
	<meta property="og:image" content="http://velox-solution.com/boundlesscare/images/slider/meta.png"/>
	<meta property="og:description" content="We at Boundless Care Inc. share a common interest and passion: to care, to serve, to educate, to encourage and to bring hope to clients and their families on living well, being healthy and maximizing their potentials to improve Quality of Life. We are dedicated to providing top – quality services, whether in a private residence or healthcare facility, at affordable rates."/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boundless Care Inc.</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/logo.png" type="image/x-icon" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
</head>
<body>
	<div id="login" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h3 class="modal-title"><span class="glyphicon glyphicon-log-in"></span> Log in</h3>
	      </div>
	      <div class="modal-body">
	      	<h5 style="margin-top: 0px;"><small>Let's get started! But before anything else, we have to login first!</small></h5>
	      	<form action="login.php" method="post">
		        <div class="input-group">
		          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
		          <input type="text" id="username" class="form-control" name="username" placeholder="Enter your username" required />
		        </div><br>
		        <div class="input-group">
		          <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </span>
		          <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required />
		        </div><br>
		        <div class="alert alert-danger hide" id="message"></div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <a href="#" class="btn btn-danger">I don't have an account</a>
	        <button type="button" class="btn btn-primary login">Log in</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!--navbar-->
	<div class="navbar-top hidden-xs">
		<div class="container">
			<div style="padding: 3px 0px">
			<span><span class="glyphicon glyphicon-phone"></span> Tel.: 408-363-8900 / 408-722-4882 &nbsp&nbsp <span class="glyphicon glyphicon-print"></span> Fax: 408-363-2984 &nbsp&nbsp <span class="glyphicon glyphicon-envelope"></span> boundlesscare@sbcglobal.net</span>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse" style="padding: 5px;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="#"><img src="images/header.png" class="navbar-logo"></a>
			</div>
			<a class="brand" style="margin: 0; float: none;" href="#">
                <img class="hidden-xs" src="images/logo.png" style="height: 100px; margin-top: 10px;"/>
            </a>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!--courousel-->
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
		<ol class="carousel-indicators">
			<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#bs-carousel" data-slide-to="1"></li>
		</ol>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	  	<div class="carousel-inner">
	    	<div class="item slides active">
		  	  	<div class="overlay"></div>
		      	<div class="slide-1"></div>
		      	<div class="hero">
			        <hgroup>
			            <h1>Going beyond your health care needs!</h1>        
			            <h3><button class="btn btn-consultation">Free Consultation Here</button></h3>
			        </hgroup>
	      		</div>
	    	</div>
	    	<div class="item slides">
	      		<div class="overlay"></div>
		      	<div class="slide-3"></div>
			      	<div class="hero">        
			        <hgroup>
			            <h1>Going beyond your health care needs!</h1>
			            <h3><button class="btn btn-consultation">Free Consultation Here</button></h3>
			        </hgroup>       
		     	 </div>
	    	</div>
	  	</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#bs-carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#bs-carousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!--content-->
	<div class="container-fluid pt-3 pb-3">
		<h1 class="text-center" id="smallFont">Why Choose Boundless Care</h1>
		<h4 class="text-center" style="padding: 0px 25px;"><small>We at Boundless Care Inc. share a common interest and passion: to care, to serve, to educate, to encourage and to bring hope to clients and their families on living well, being healthy and maximizing their potentials to improve Quality of Life. We are dedicated to providing top – quality services, whether in a private residence or healthcare facility, at affordable rates.</small></h4>
		<hr class="hr">
		<div class="row">
			<div class="col-xs-12 col-md-offset-1 col-md-2 border-line">
				<img src="images/icons/personalized.png" class="img-responsive center-block doctor-icons">
				<h4 class="text-center doctor-orange">Personalized Service</h4>
				<p class="doctor-white">We will cater to whatever service you need. The management performs the initial assessment performs the initial assessment for each and every client to certain specific needs.</p>
			</div>
			<div class="col-xs-12 col-md-2 border-line">
				<img src="images/icons/convenience.png" class="img-responsive center-block doctor-icons">
				<h4 class="text-center doctor-orange">Convenience</h4>
				<p class="doctor-white">Our service provide excellent user experience since we want to make your schedule easy. We offer 24/7 services, with an on-call care manager to answer any concerns.</p>
			</div>
			<div class="col-xs-12 col-md-2 border-line">
				<img src="images/icons/lowcost.png" class="img-responsive center-block doctor-icons">
				<h4 class="text-center doctor-orange">Lower Cost</h4>
				<p class="doctor-white">You only have to pay for the service that you need and the services that you will avail. This is so that you will avoid paying any additional and unnecessary charges.</p>
			</div>
			<div class="col-xs-12 col-md-2 border-line">
				<img src="images/icons/caregivers.png" class="img-responsive center-block doctor-icons">
				<h4 class="text-center doctor-orange">Skilled Care Giver</h4>
				<p class="doctor-white">Our service provide you with a competent and experienced care provider to cater to your every needs. We want to assure you quality for every service availed.</p> 
			</div>
			<div class="col-xs-12 col-md-2 border-line">
				<img src="images/icons/privacy.png" class="img-responsive center-block doctor-icons">
				<h4 class="text-center doctor-orange">Privacy</h4>
				<p class="doctor-white">We value the privacy of each and every client that we cater and ensures them that we keep everything confidential</p> 
			</div>
		</div><hr>
		<h1 class="text-center" id="smallFont">What We Can Do For You</h1>
		<h4 class="text-center" style="padding: 0px 25px 10px 25px;"><small>Below are the things we at Boundless Care Inc. can do for you! Just remember that we share a common interest and passion: to care, to serve, to educate, to encourage and to bring hope to clients and their families on living well, being healthy and maximizing their potentials to improve Quality of Life.</small></h4>		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			    <div class="item active">
			    	<div class="col-xs-12 col-md-6">
			      		<img src="images/slider/article-1.jpg" class="img-responsive">
			      	</div>
			      	<div class="col-xs-12 col-md-6">
			      		<h3><strong>Homecare Services by Caregivers / Certified Nurse Assistant</strong></h3>
						<p>Our caring and experienced cargivers, licensed Health Aides, and Certified Nursing Assistants will provide care with the Activities of Daily Living including:</p>
						<ul>
							<li>Bathing</li>
							<li>Feeding and Meal Preparations</li>
							<li>Incontinence Care / Toileting</li>
							<li>Mobility Transfers and Positioning Program</li>
							<li>Light House Work</li>
							<li>Assist or Remind clients concerning timely medications and other personal care needs</li>
						</ul>
						<hr><a href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span> Previous
						    <span class="sr-only">Previous</span>
						</a>&nbsp | &nbsp
						  <a href="#myCarousel" data-slide="next">
						    Next <span class="glyphicon glyphicon-chevron-right"></span> 
						    <span class="sr-only">Next</span>
						</a>
			      	</div>
			    </div>
			    <div class="item">
			      	<div class="col-xs-12 col-md-6">
			      		<img src="images/slider/article-2.jpg" class="img-responsive">
			      	</div>
			      	<div class="col-xs-12 col-md-6">
			      		<h3><strong>Respite Care</strong></h3>
						<p>Our caring staff enables you, your family, and other caregivers to take time off from the demanding responsibilities of caring for an elderly or sick member of the family. Let us lift some of that burden from you!</p>
						<hr><a href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span> Previous
						    <span class="sr-only">Previous</span>
						</a>&nbsp | &nbsp
						  <a href="#myCarousel" data-slide="next">
						    Next <span class="glyphicon glyphicon-chevron-right"></span> 
						    <span class="sr-only">Next</span>
						</a>
			      	</div>
			    </div>
			    <div class="item">
			      <div class="col-xs-12 col-md-6">
			      		<img src="images/slider/article-3.jpg" class="img-responsive">
			      	</div>
			      	<div class="col-xs-12 col-md-6">
			      		<h3><strong>Palliative Care</strong></h3>
						<p>We have staff trained to take care of patients under palliative and hospice services.
						Direct personal care is particularly important as patients near the end of life and become totally dependent on caregivers for all care and activities of daily living. 
						They are trained to understand patient’s emotional and physical needs.
						</p>
						<hr><a href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span> Previous
						    <span class="sr-only">Previous</span>
						</a>&nbsp | &nbsp
						  <a href="#myCarousel" data-slide="next">
						    Next <span class="glyphicon glyphicon-chevron-right"></span> 
						    <span class="sr-only">Next</span>
						</a>
			      	</div>
			    </div>
			     <div class="item">
			      <div class="col-xs-12 col-md-6">
			      		<img src="images/slider/article-4.jpg" class="img-responsive">
			      	</div>
			      	<div class="col-xs-12 col-md-6">
			      		<h3><strong>Case Management by Licensed Professionals</strong></h3>
						<p>Our client-focused program is designed to coordinate care services for your loved one regardless of the health care setting.
						We provide licensed professionals with experience in geriatric care who are experts in managing and providing care for the needs of the elderly and their families. 
						The licensed care manager will manage everything and will be responsible for integrating all health services for the client: administering personal care services, coordinating medical appointments, arranging transportation and much more to maximize and provide the best quality care your family needs and deserves.
						</p>
						<hr><a href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span> Previous
						    <span class="sr-only">Previous</span>
						</a>&nbsp | &nbsp
						  <a href="#myCarousel" data-slide="next">
						    Next <span class="glyphicon glyphicon-chevron-right"></span> 
						    <span class="sr-only">Next</span>
						</a>
			      	</div>
			    </div>
			     <div class="item">
			      <div class="col-xs-12 col-md-6">
			      		<img src="images/slider/article-5.jpg" class="img-responsive">
			      	</div>
			      	<div class="col-xs-12 col-md-6">
			      		<h3><strong>Independent Private Duty Nursing</strong></h3>
						<p>Our nurses are licensed knowledgeable and trustworthy and are qualified to take care of the ailing members of your family.
						They can work short or extended hours (minimum of 4 hours) depending on your needs.
						</p>
						<hr><a href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span> Previous
						    <span class="sr-only">Previous</span>
						</a>&nbsp | &nbsp
						  <a href="#myCarousel" data-slide="next">
						    Next <span class="glyphicon glyphicon-chevron-right"></span> 
						    <span class="sr-only">Next</span>
						</a>
			      	</div>
			    </div>
			</div>
		</div>
    </div>

    <div class="banner-1">
		<div class="container">
			<span class="banner-text">"Nothing Compares Being at the Comfort of Your Own Home!"</span>
		</div>
	</div>

	<div class="container pt-2 pb-5">
		<h1 style="margin-bottom: 0px;">Contact Us!</h1>
		<h3 style="margin-top: 0px;"><small>Let us reach you by sending us a message! We'll Make sure to reply right away!</small></h3><hr>
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<div id="map-canvas" style="height: 300px;"></div>
			</div>
			<div class="col-xs-12 col-md-8">
				
				<form class="form-horizontal pt-2">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="name">Name:</label>
				    <div class="col-sm-9"> 
				      <input type="email" required class="form-control" id="name" placeholder="What is your name?">
				    </div>
				  </div>	
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="emailaddress">Email Address:</label>
				    <div class="col-sm-9"> 
				      <input type="email" required class="form-control" id="emailaddress" placeholder="What is your email address?">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="contact">Contact Number:</label>
				    <div class="col-sm-9"> 
				      <input type="email" required class="form-control" id="contact" placeholder="How can we reach you asides from the email you provided?">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="reason">Reason for Contact:</label>
				    <div class="col-sm-9"> 
				      <select class="form-control" id="reason">
					    <option disabled selected>Select an reason for contact below</option>
					    <option>Ask for Senior Help On-Call</option>
					    <option>Start Home Care Service</option>
					    <option>Request for Assessment</option>
					    <option>Ask for More Informations About Services</option>
					    <option>Ask for Brochure</option>
					    <option>Others</option>
					  </select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="address">Message:</label>
				    <div class="col-sm-9"> 
				       <textarea class="form-control" rows="5" id="address" placeholder="Tell us what you want to say so we can know."></textarea>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-primary doctor-flat"><span class="glyphicon glyphicon-send"></span> Send</button>
				    </div>
				  </div>
				</form>

			</div>
		</div>
	</div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<h4>Office Hours<h4>
						<h4><small>Monday - Friday: 9:00 AM to 6:00 PM</small></h4><hr style="border-color: #777; margin: 10px 0px;">
						<h4>Hours of Operation</h4>
						<h4><small>Monday - Saturday: 4:30 AM to 11:00 PM</small></h4>
					</div>
					<div class="col-xs-12 col-md-6">
						<h4>Social Media Pages<h4>
						<div class="text-white">
							<a href="#"><i class="fa fa-facebook-square fa-3x social"></i></a>
				            <a href="#"><i class="fa fa-twitter-square fa-3x social"></i></a>
				            <a href="#"><i class="fa fa-google-plus-square fa-3x social"></i></a>
				            <a href="mailto:boundlesscare@sbcglobal.net"><i class="fa fa-envelope-square fa-3x social"></i></a>
			            </div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bot">
			<p class="text-center pt-1 pb-1" style="margin: 0px;">Developed by Velox Solutions &copy Copyright 2017</p>
		</div>
	</footer>
	
</body>
<script type="text/javascript">
      function initMap(){
		var myLatlng = new google.maps.LatLng(37.257463,-121.782884);
		var mapOptions = {
		  zoom: 14,
		  center: myLatlng
		}
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		var marker = new google.maps.Marker({
		    position: myLatlng,
		    title:"Boundless Care Inc.",
		    animation: google.maps.Animation.DROP,
		});

		// To add the marker to the map, call setMap();
		marker.setMap(map);

    }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhBuIWDfjqk26jnvuR95_-ZHXhFV7dcdA&libraries=places&callback=initMap"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>