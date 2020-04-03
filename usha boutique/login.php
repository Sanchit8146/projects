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
		//echo "valid";
	}
	else
	{
		$script =  "<script> $(document).ready(function(){ $('#myModal').modal('show'); });
					document.getElementById('alrt').style.display = 'block';</script>";
		//echo "not valid";
	}
	}
?>