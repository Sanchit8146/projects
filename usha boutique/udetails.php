<?php
	SESSION_START();
	if(!isset($_SESSION['uname']))
	{
		header("location:401.php");
	}
?>
<html>
	<head>
		<?php require_once("headincludes.php")?>
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/register.js"></script>
		<style>
			.alert{
				display:none;
				margin:-17px 0px 1px 0px;
				width:100%;
			}
		</style>
	</head>
	<body>
		<?php
			require_once("connect.php");
			$usname=$_GET["name"];
			$query=mysqli_query($conn,"select * from register where username='$usname'");
			$row=mysqli_fetch_array($query);
			extract($row);
			$ad1=explode('!!', $address);
		?>
		<!--navigation bar-->
		<?php require_once("nav.php")?>
		<!--//navigation bar-->
		
		<!--banner-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner">
					<p class="text-center" style="padding-top:225px;">USER DETAILS</p>
				</div>
			</div>
		</div>
		<!--//banner-->
		
		<!--registration-->
		<div class="container-fluid" id="registeration">
			<div class="row">
				<div class="col-md-2 col-lg-2">
				</div>
				<div class="col-md-4 col-lg-4" id="reg">
					<center><h3 style="color:black;font-size:30px;text-align:center;margin-bottom:28px;">User Details</h3></center>
					<form action="usupdate.php" method="POST" onsubmit="return validate();">
						<div class="form-group" >
							<input type="text" placeholder="Full Name" name="fname" value="<?php echo $fullname; ?>" class="form-control rg" required>
						</div>
						<div class="form-group" >
							<input type="tel" placeholder="Contact Number" name="cnum" value="<?php echo $contactno; ?>" class="form-control rg" maxlength="10" pattern="[0-9]{10}" required>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Username" onkeyup="mycase();" value="<?php echo $username; ?>" name="uname" id="cs" class="form-control rg" required readonly>
							<!--<i class="fas fa-user"></i>-->
						</div>
						<div class="form-group">
							<input type="email" placeholder="Email Address" name="email" value="<?php echo $email; ?>" class="form-control rg" required>
							<!--<i class="fas fa-envelope"></i>-->
						</div>
						<div class="form-group">
							<input type="text" placeholder="Street Address" name="stadd" value="<?php echo $ad1[0];?>" class="form-control rg" required>
							<input type="text" placeholder="Address line 2" name="add2" value="<?php echo $ad1[1];?>" class="form-control rg" required>
						</div>
						<div class="form-group">
							<select name="gender" class="form-control rg" required>
								<option value="" disabled>Gender</option>
								<option value="male" 
									<?php 
										if ($row['gender']=='male')
										{
											echo "selected";
										}
									?>
								>Male</option>
								<option value="female"
									<?php 
										if ($row['gender']=='female')
										{
											echo "selected";
										}
									?>
								>Female</option>
								<option value="other"
									<?php 
										if ($row['gender']=='other')
										{
											echo "selected";
										}
									?>
								>Other</option>
							</select>
						</div>
						<div class="form-group">
							<input type="password" placeholder="New Password" id="pass" name="pass" minlength="8" value="<?php echo $password; ?>" class="form-control rg" required>
							<i class="fas fa-eye" onclick="showpas();" id="showpass" style="position:absolute;right:20px;bottom:200px;"></i>
						</div>
						<div class="form-group">
							<input type="password" placeholder="Confirm Your Password" id="cpass" name="cpass" oninput="checkpass();" class="form-control rg" required>
							<i class="fas fa-eye" onclick="showpas1();" id="showpass1" style="position:absolute;right:20px;bottom:135px;"></i>
							<span class="alert alert-danger col-md-12" id="cpass1">
								<strong style="font-size:14px;font-weight:bold;">Passwords doesn't match!!</strong>
							</span>
							<span class="alert alert-success col-md-12" id="cpass2">
								<strong style="font-size:14px;font-weight:bold;">Passwords matched!!</strong>
							</span>
						</div>
						<center><button class="disabled" id="bt1" style="margin-top:5px;">
							Update&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>
						</button></center>
					</form>
				</div>
				<div class="col-lg-4 col-md-4" id="register2">
				</div>
				<div class="col-md-2 col-lg-2">
				</div>
			</div>
		</div>
		<!--//registration-->
		
		<!-- Footer -->
		<?php require_once("footer.php")?>	
		<!-- Footer -->
	</body>
</html>