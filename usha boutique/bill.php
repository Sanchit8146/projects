<?php
	SESSION_START();
	if(!isset($_SESSION['uname']))
	{
		header("location:401.php");
	}
?>
<html>
	<head>
		<?php 
			require_once("headincludes.php");
			require_once("connect.php")
		?>
	</head>
	<body>
		<?php
			require_once("connect.php");
			$eid=$_GET["id"];
			$nam=$_GET["na"];
			$query=mysqli_query($conn,"select * from place where oid=$eid");
			$query1=mysqli_query($conn,"select address from register where username='$nam'");
			$row=mysqli_fetch_array($query);
			$rowz=mysqli_fetch_array($query1);			
			extract($row);
			extract($rowz);
			$ad1=explode('!!', $address);
		?>
		<!--navigation bar-->
		<?php require_once("nav.php")?>
		<!--//navigation bar-->
		
		<!--banner-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner">
					<p class="text-center" style="padding-top:225px">BILL</p>
				</div>
			</div>
		</div>
		<!--//banner-->
		
		<!--bill-->
		<div class="table-responsive" style="background-color:white;">
			<div class="container">
				<table class="table table-hover">
					<tr>
						<th style="font-size:35px;">USHA BOUTIQUE</th>
					</tr>
					<tr>
						<td>
							<p style="color:black;"><?php echo $ad1[0].",".$ad1[1];?></p>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<!--//bill-->		
		
		<!-- Footer -->
		<?php require_once("footer.php")?>
		<!-- Footer -->
	</body>
</html>