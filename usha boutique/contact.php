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
					<p class="text-center" style="padding-top:225px">CONTACT US</p>
				</div>
			</div>
		</div>
		<!--//banner-->
		
		<!--contactus-->
		<div class="container-fluid" id="contact" style="padding-left:0px;padding-bottom:0px;">
		<div class="contact100-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3409.5002000988775!2d75.62378241509985!3d31.289917381446507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a595e71cc08cf%3A0x5549338521fcfe3!2sUsha+Boutique!5e0!3m2!1sen!2sin!4v1561893518264!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
			<div class="row">
				<div class="col-lg-2 col-md-2"></div>
				<div class="col-lg-4 col-md-4" id="contact1">
					<center><h4 style="border-bottom:4px solid goldenrod;font-size:30px;">Get in&nbsp;</h4><h4 style="font-family:'Oleo Script Swash Caps',cursive;color:goldenrod;font-size:40px;">Touch with us</h4></center>
					<form action="sent.php" method="POST">
						<div class="form-group">
							<input type="text" class="form-control pd"  placeholder="eg:- Sanchit Gupta" name="cname" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control pd"  placeholder="eg:- example@gmail.com" name="email">
						</div>
						<div class="form-group">
							<input type="tel" class="form-control pd" name="phone" placeholder="eg:- 9876543210" maxlength="10" pattern="[0-9]{10}" required>
						</div>
						<div class="form-group">
							<textarea class="form-control pd" rows="5" placeholder="Drop your message here" name="message" required></textarea>
						</div>
						<button type="submit" id="btn" class="btn btn-primary pd"><span class="fas fa-inbox"></span>&nbsp;&nbsp;Send</button>
					</form>
				</div>
				<div class="col-lg-4 col-md-4" id="contact2">
					<h3 style="padding-top:140px;" id="txt1">Visit Us</h3>
					<p id="txt2"><span class="glyphicon glyphicon-pushpin"></span>&nbsp;&nbsp;Jalandhar Cantt</p>
					<h3 id="txt1">Let's Talk</h3>
					<p id="txt3"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;+91-9876543210</p>
					<h3 id="txt1">Mail Us</h3>
					<p id="txt3"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;example@gmail.com</p>
				</div>
				<div class="col-lg-2 col-md-2"></div>
			</div>
		</div>
		<!--//contactus-->
		
		<!-- Footer -->
		<?php require_once("footer.php")?>		
		<!-- Footer -->
	</body>
</html>