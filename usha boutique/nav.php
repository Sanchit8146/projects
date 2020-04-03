<?php
	require("connect.php");
	if (isset($_POST['submit'])){
	$un=$_POST['username'];
	$p=$_POST['password'];
	$query=mysqli_query($conn,"select * from register where username='$un' and password='$p'");
	$num= mysqli_num_rows($query);
	if($num==1)
	{
		SESSION_START();
		$_SESSION['uname']=$un;
		header("location:order.php");
	}
	else
	{
		$script =  "<script> $(document).ready(function(){ $('#myModal').modal('show'); });
					document.getElementById('alrt').style.display = 'block';</script>";
	}
	}
?>
<script type="text/javascript" src="js/nav.js"></script>
<style>
	.dropdown-menu li a:hover {background-color:#262626;}
	.dropdown-menu>.active>a{background-color:#262626;}
</style>	
<nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span> 
		  </button>
		  <a class="navbar-brand" href="index.php">USHA BOUTIQUE</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">			
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<?php
				if(!isset($_SESSION['uname']))
				{
					echo '<li class="hidden"><a>Place your Order</a></li>';
				}
				else
				{
					echo '<li><a href="order.php">Place your Order</a></li>';
				}	
				?>
				<li><a href="contact.php">Contact Us</a></li>				
				</ul>
				<?php
				if(!isset($_SESSION['uname']))
				{   
					echo '<ul class="nav navbar-nav navbar-right" style="margin-right:20px;">
					<li><a href="register.php"><span class="fad fa-user-plus fa-lg"></span> Sign Up</a></li>
					<li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li></ul>';
				}
				else
				{
					echo '<ul class="nav navbar-nav navbar-right" style="margin-right:20px;">
					<li class="dropdown">
						<li class="dropdown-toggle" data-toggle="dropdown"><a><span class="glyphicon glyphicon-user"></span> '.$_SESSION['uname'].'
							<span class="caret"></span></a>
						</li>
						<ul class="dropdown-menu" style="background-color:#333333;">
							<li><a href="odetails.php" style="color:white;">Order Details</a></li>
							<li class="divider" style="background-color:black;"></li>
							<li><a href="udetails.php?name='.$_SESSION['uname'].'" style="color:white;">User Details</a></li>
						</ul>
					</li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li></ul>';
				}?>		
		</div>
	</div>
</nav>

<!--login-->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<center><h4 class="modal-title" style="font-size:25px;" id="myModalLabel">Login Here</h4></center>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-7">
						<div class="well">
							<form action="" id="loginForm" method="POST">
								<div class="form-group">
									<label for="username" class="control-label">Username</label>
									<input type="text" onkeyup="mcase1();" class="form-control" id="username" name="username" placeholder="Please enter you username" required>
								</div>
								<div class="form-group">
									<label for="password" class="control-label">Password</label>
									<input type="password" class="form-control" id="password" name="password" required placeholder="..........">
									<i class="fas fa-eye" onclick="showpas2();" id="showpass2" style="position:absolute;right:40px;bottom:143px;"></i>
								</div>
								<div class="alert alert-danger" id="alrt" style="display:none;">
									<strong style="font-size:13.5px;">Username or Password incorrect!!</strong>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" id="remember"> Remember login
									</label>
								</div>
								<button type="submit" name="submit" onclick="check1();" class="btn btn-success">Login</button>
							</form>
						</div>
					</div>
					<div class="col-xs-5">
						<p class="lead">Register now</p>
						<ul class="list-unstyled" style="line-height:2">
							<li><span class="fa fa-check text-success"></span> See all your orders</li>
							<li><span class="fa fa-check text-success"></span> Fast re-order</li>
							<li><span class="fa fa-check text-success"></span> Fast checkout</li>
						</ul>
						<p><button class="btn btn-info btn-block"><a href="register.php" style="font-size:15px;color:white;">Register now!</a></button></p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php if(isset($script)){ echo $script; } ?>
<!--//login-->