<?php SESSION_START();?>
<html>
	<head>
		<?php require_once("headincludes.php")?>
		<script type="text/javascript" src="js/time.js"></script>
	</head>
	<body>
		<!--preloader-->
		<div id="preloader"></div>
		<!--//preloader-->
		
		<!--navigation bar-->
		<?php require_once("nav.php")?>
		<!--//navigation bar-->
		
		<!--Carousel text-->
		<div id="myPageContent" class="container-fluid">
			<div id="textSlider" class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2" id="fixed">
					<p class="text-center">USHA</p>
					<p class="text-center">BOUTIQUE</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8" id="slide">
					<div class="scroller">
						<div class="inner">
							<p>DESIGNING LADIES SUITS</p>
							<p>CUSTOMER SATISFACTION</p>
							<p>EXPERIENCED STAFF</p>
							<p>TIMELY DELIVERY</p>
							<p>ADVANCED MACHINERY</p>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<!--//Carousel text-->
		
		<!--maincontent-->
		<div class="container-fluid" id="main">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h1>USHA BOUTIQUE</h1>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-3" style="margin-bottom:40px;margin-top:40px;font-family:Literata;">
					<h5>WE PROVIDE :-</h5>
					<ul id="services">
						<li style="margin-top:22px;">DESIGNING LADIES SUITS</li>
						<li>CUSTOMER SATISFACTION</li>
						<li>EXPERIENCED STAFF</li>
						<li>TIMELY DELIVERY</li>
						<li>ADVANCED MACHINERY</li>
					</ul>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-4">
					<img src="images/bg.jpg" class="img-responsive" alt="image" style="box-shadow:10px 10px 5px #aaaaaa;margin-bottom:40px;margin-top:40px;">
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
		<!--//maincontent-->
		
		<!--offer-->
		<div class="container-fluid" id="offer">
			<div class="row">
				<div class="col-md-12">
					<p id="over">Offer period ends in:-</p>
					<h2 id="day"></h2><h2>d </h2><h2 id="hour"></h2><h2>h </h2><h2><h2 id="minute"></h2><h2>m </h2><h2 id="second"></h2><h2>s</h2>
				</div>
			</div>
		</div>
		<!--//offer-->
		
		<!-- Footer -->
		<script>
			window.addEventListener('load', function(){
				$('#preloader').fadeOut('slow');
			});
		</script>
		<?php require_once("footer.php")?>			
		<!-- Footer -->
	</body>
</html>
