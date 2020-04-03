<?php SESSION_START();?>
<html>
	<head>
		<?php require_once("headincludes.php")?>		
	</head>
	<body>
		<!--navigation bar-->
		<?php require_once("nav.php")?>
		<!--//navigation bar-->
		
		<!--banner-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner">
					<p class="text-center" style="padding-top:225px">ABOUT US</p>
				</div>
			</div>
		</div>
		<!--//banner-->
		
		<!--aboutus-->
		<div class="container-fluid" id="main">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h1 style="font-family:'Josefin Sans', sans-serif;font-size:35px;">ONLINE FASHION BOUTIQUE</h1>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-4">
					<img src="images/about1.jpg" class="img-responsive" alt="image" style="box-shadow:10px 10px 5px #aaaaaa;margin-bottom:40px;margin-top:40px;">
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3" style="margin-bottom:40px;margin-top:40px;font-family:Literata;">
					<p class="about">We are one of the best boutiques in Jalandhar.We provide the best services aloing with customer satisfaction.We offer a timely delivery.
					If any changes occur, the alter is immediately.</p>
					<p class="about">Our rates are less expensive with a quality of service.We have an experienced staff offering best fitting for your clothes.Online shopping will let you stitch your clothes by sitting at home only.</p>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>			
		<!--//aboutus-->
		
		<!--extrainfo-->
		<div class="container-fluid" id="extra">
			<div class="row" id="aa">
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 text-center">
					<span class="count" style="color:white;font-size:30px;">1000</span><span style="color:white;font-size:30px;"> +</span>
					<h3>Happy Customers&nbsp;<span class="far fa-grin-alt" style="color:white;font-size:30px;"></span></h3>
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 text-center">
					<span class="count" style="color:white;font-size:30px;">5</span>&nbsp;<i style="color:white;font-size:24px;" class="fas fa-star"></i>
					<h3>On Google Maps&nbsp;<span class="fas fa-map-marked-alt" style="color:white;font-size:30px;"></span></h3>
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 text-center">
					<span class="count" style="color:white;font-size:30px;">5</span><span style="color:white;font-size:30px;"> +</p>
					<h3>Experienced Staff&nbsp;<span class="fas fa-users" style="color:white;font-size:30px;"></span></h3>
				</div>
			</div>
		</div>
		<!--//extrainfo-->
		
		<!--contactcards-->
			<div class="container-fluid" style="background-color:white;width:101%;">
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<h1 style="color:black;font-family:'Kaushan Script',cursive;">Our Members</h1>
					</div>
					<div class="col-md-4">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="images/n1.png" alt="name1" style="width:100%">
							<h1 style="text-align:center;border:none;font-size:25px;">NAME:-XYZ</h1>
							<p class="title">OWNER</p>
							<p><button id="bt"><span class="fa fa-mobile-alt" style="color:white;"></span>&nbsp;9876543210<br>
							<span class="far fa-envelope" style="color:white;"></span>&nbsp;example@gmail.com</button></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="images/n2.png" alt="name2" style="width:100%">
							<h1 style="text-align:center;border:none;font-size:25px;">NAME:-XYZ</h1>
							<p class="title">OWNER</p>
							<p><button id="bt"><span class="fas fa-mobile-alt" style="color:white;"></span>&nbsp;9876543210<br>
							<span class="far fa-envelope" style="color:white;"></span>&nbsp;example@gmail.com</button></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="images/n3.png" alt="name3" style="width:100%">
							<h1 style="text-align:center;border:none;font-size:25px;">NAME:-XYZ</h1>
							<p class="title">OWNER</p>
							<p><button id="bt"><span class="fas fa-mobile-alt" style="color:white;"></span>&nbsp;9876543210<br>
							<span class="far fa-envelope" style="color:white;"></span>&nbsp;example@gmail.com</button></p>
						</div>	
					</div>	
				</div>
			</div>
		<!--//contactcards-->
		
		<!-- Footer -->
		<?php require_once("footer.php")?>	
		<!--counter--> <script type="text/javascript" src="js/counter.js"></script> <!--//counter-->
		<!-- Footer -->
	</body>
</html>