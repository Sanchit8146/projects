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
		<style>
			a{
				cursor:pointer;
			}
		</style>
		<script>
			function dbox(oid)
			{
				var r= confirm("Press Ok to cancel the order!!!!");
				if(r==true)
				{
					location.href="delete.php?id="+oid+"";
				}
				else
				{
					location.href="odetails.php";
				}
			}
		</script>
	</head>
	<body>
		<!--navigation bar-->
		<?php require_once("nav.php")?>
		<!--//navigation bar-->
		
		<!--banner-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner">
					<p class="text-center" style="padding-top:225px">ORDER DETAILS</p>
				</div>
			</div>
		</div>
		<!--//banner-->
		
		<!--details-->
		<div class="table-responsive" style="background-color:white;">
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Design no.</th>
					<th>Placed on</th>
					<th>Details</th>
					<th>Alteration</th>
					<th>Measurements</th>
					<th>Edit order</th>
					<th>Cancel order</th>
					<th>Bill</th>
				</tr>
				<?php
					$un=$_SESSION['uname'];
					$query=mysqli_query($conn,"select * from place where username='$un'");
					$num=mysqli_num_rows($query);
					if($num>0)
					{
						while($row=mysqli_fetch_array($query))
						{
							extract($row);
							echo "<tr><td>$oid</td>
							<td>$username</td>
							<td>$design</td><td>$date</td><td>$details</td><td>$alteration</td>";?><td><a href="images/<?php echo $row["pic"];?>" target="_blank"><img src="images/<?php echo $row["pic"];?>" height="70px" alt="image"></a></td>
							<?php echo "<td><a href='edit.php?id=$oid'>Edit</a></td><td><a onclick='dbox($oid);'>Cancel</a></td><td><a href='bill.php?id=$oid&na=$un'>Bill</a></td></tr>";
						}
					}
					else
					{
						echo '<script>location.href="order.php";
						alert("No order placed yet....");</script>';
					}
				?>
			</table>
		</div>
		<!--//details-->		
		
		<!-- Footer -->
		<?php require_once("footer.php")?>
		<!-- Footer -->
	</body>
</html>