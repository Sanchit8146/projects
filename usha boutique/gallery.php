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
				<div class="col-lg-12 banner1">
					<video autoplay muted loop id="myVideo">
					<source src="videos/firework.mp4" type="video/mp4">
					</video>
					<h1 style="position:relative;color:white;border:none;line-height:500px;">GALLERY</h1>
				</div>			
			</div>
		</div>
		<!--//banner-->
		
		<!--gallery-->
			<div class="container-fluid" style="background-color:#f0f1e9;width:101%;">
				<div class="row" id="row">
					<div class="column">
						<a href="images/about.jpg" data-lightbox="image"><img src="images/about.jpg"></a>
						<a href="images/about1.jpg" data-lightbox="image"><img src="images/about1.jpg"></a>
						<a href="images/bg.jpg" data-lightbox="image"><img src="images/bg.jpg"></a>
						<a href="images/bg-01.jpg" data-lightbox="image"><img src="images/bg-01.jpg"></a>
						<a href="images/boutique.jpg" data-lightbox="image"><img src="images/boutique.jpg"></a>
					</div>
					<div class="column">
						<a href="images/about1.jpg" data-lightbox="image"><img src="images/about1.jpg"></a>
						<a href="images/about.jpg" data-lightbox="image"><img src="images/about.jpg"></a>
						<a href="images/bg-01.jpg" data-lightbox="image"><img src="images/bg-01.jpg"></a>
						<a href="images/bg.jpg" data-lightbox="image"><img src="images/bg.jpg"></a>
						<a href="images/boutique.jpg" data-lightbox="image"><img src="images/boutique.jpg"></a>
					</div>
					<div class="column">
						<a href="images/about.jpg" data-lightbox="image"><img src="images/about.jpg"></a>
						<a href="images/about1.jpg" data-lightbox="image"><img src="images/about1.jpg"></a>
						<a href="images/boutique.jpg" data-lightbox="image"><img src="images/boutique.jpg"></a>
						<a href="images/bg-01.jpg" data-lightbox="image"><img src="images/bg-01.jpg"></a>
						<a href="images/bg.jpg" data-lightbox="image"><img src="images/bg.jpg"></a>
					</div>
					<div class="column">
						<a href="images/about.jpg" data-lightbox="image"><img src="images/about.jpg"></a>
						<a href="images/about1.jpg" data-lightbox="image"><img src="images/about1.jpg"></a>
						<a href="images/bg.jpg" data-lightbox="image"><img src="images/bg.jpg"></a>
						<a href="images/bg-01.jpg" data-lightbox="image"><img src="images/bg-01.jpg"></a>
						<a href="images/about.jpg" data-lightbox="image"><img src="images/about1.jpg"></a>
					</div>
				</div>
			</div>
		<!--gallery-->
		
		<!-- Footer-->
		<?php require_once("footer.php")?>
		<script src="js/lightbox.js"></script>
		<script>
			document.getElementById("myVideo").playbackRate=1;
		</script>
		<!-- Footer-->
	</body>
</html>