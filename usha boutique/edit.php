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
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		<script type="text/javascript" src="slick/slick.min.js"></script>	
		<script type="text/javascript" src="js/order.js"></script>		
		<style>
		div{
			outline:none;
		}
		.chb{
			outline:none;
		}
		</style>
	</head>
	<body>
		<?php
			require_once("connect.php");
			$eid=$_GET["id"];
			$query=mysqli_query($conn,"select * from place where oid=$eid");
			$row=mysqli_fetch_array($query);
			extract($row);
		?>
		<!--navigation bar-->
		<?php require_once("nav.php")?>
		<!--//navigation bar-->
		
		<!--banner-->
		<div class="container-fluid" style="margin-top:52px">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner">
					<p class="text-center" style="padding-top:160px">EDIT ORDER</p>
				</div>
			</div>
		</div>
		<!--//banner-->
		
		<!--order-->
		<div class="container-fluid" id="main">
			<form action="update.php" enctype="multipart/form-data" method="POST">
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<h1 class="new">SELECT A DESIGN</h1>
					</div>
					<div class="col-md-4">
					</div>
				</div>
		</div>
		<div class="container-fluid your-class" style="background-color:white;margin-top:-1px;">
			<div style="height:461px;">
				<img src="images/d1.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 1</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d2.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 2</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d3.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 3</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d4.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 4</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d5.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 5</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d6.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 6</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d7.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 7</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d8.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 8</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d9.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 9</label></center>
			</div>
			<div style="height:461px;">
				<img src="images/d10.jpg" alt="desgins" style="height:400px; width:320px;">
				<center><label style="font-size:20px;line-height:61px;font-weight:550;">Design 10</label></center>
			</div>
		</div>
		<div class="container-fluid" style="background-color:white;">
			<div class="form-group row">
				<div class="col-md-3">
					<label class="new1">Enter design number:</label>
				</div>
				<div class="col-md-5">
					<input type="hidden" class="form-control" name="oid" value="<?php echo $eid; ?>" readonly>
					<input type="number" class="form-control" placeholder="Between 1 and 10" value="<?php echo $design;?>" min="1" max="10" name="designs">
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="form-group row">
				<div class="col-md-3">
					<label class="new1">Upload your measurements:</label>
				</div>
				<div class="col-md-5">
					<input type="file" class="form-control" name="snap" accept="image/*">
					<span class="help-block">Upload a new one if you want to change**</span>
					<input type="hidden" class="form-control" name="uname" value='<?php echo $_SESSION["uname"]; ?>'>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="form-group row">
				<div class="col-md-3">
					<label class="new1">Additional design details:</label>
				</div>
				<div class="col-md-5">
					<textarea class="form-control" rows="4" name="details" placeholder="Add anything you want to change in design according to yourself..."><?php echo $row['details'];?></textarea>
					<span class="help-block">This field is optional**</span>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="form-group row">
				<div class="col-md-3">
					<label class="new1">Additional alteration:</label>
				</div>
				<div class="col-md-5">
					<label class="checkbox-inline" style="font-size:20px;"><input type="checkbox" style="width:15px;height:21px;" id="chk1" value="lining" onclick="enb();">Lining</label>
					<label class="checkbox-inline" id="ch" style="font-size:20px;display:none;"><input type="checkbox" style="width:15px;height:21px;" name="chk[]" id="chk" class="chb" value="Half Lining">Half Lining</label>
					<label class="checkbox-inline" id="ch1" style="font-size:20px;display:none;"><input type="checkbox" style="width:15px;height:21px;" name="chk[]" id="chk2" class="chb" value="Full Lining">Full Lining</label>
					<label class="checkbox-inline" style="font-size:20px;"><input type="checkbox" style="width:15px;height:21px;" name="chk[]" value="Piping">Piping</label>
					<label class="checkbox-inline" style="font-size:20px;"><input type="checkbox" style="width:15px;height:21px;" name="chk[]" value="Buttons">Buttons</label>
					<label class="checkbox-inline" style="font-size:20px;"><input type="checkbox" style="width:15px;height:21px;" name="chk[]" value="None">Nothing</label>
					<span class="help-block">Enter these again**</span>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="form-group row">
				<div class="col-md-3"></div>
				<div class="col-md-5"><button type="submit" class="btn btn-primary">Update your order</button></div>
				<div class="col-md-4"></div>
			</div>
			</form>	
		</div>
		<!--//order-->
		
		<!-- Footer -->
		<?php require_once("footer.php")?>
		<script>
			$(".chb").change(function(){
				$(".chb").prop('checked', false);
				$(this).prop('checked', true);
			});
		//different function starts here !!!
			$('.reset').click(function() {
			var name = $(this).data('name');
			$('input[name=' + name + ']').prop('checked',false);
			$('.reset').css('display','none');
			});
		</script>
		<!-- Footer -->
	</body>
</html>