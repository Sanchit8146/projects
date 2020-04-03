<?php
	require("connect.php");
	$fn=$_POST['fname'];
	$cn=$_POST['cnum'];
	$un=$_POST['uname'];
	$e=$_POST['email'];
	$a1=$_POST['stadd'];
	$a2=$_POST['add2'];
	$g=$_POST['gender'];
	$p=$_POST['pass'];
	$query1=mysqli_query($conn,"select * from register where username='$un'");
	$num=mysqli_num_rows($query1);
	if($num>0)
	{
		echo'<script>alert("Username exists");location.href="register.php";</script>';
	}
	else
	{
		$query=mysqli_query($conn,"insert into register(fullname,contactno,username,email,address,gender,password) values('$fn','$cn','$un','$e','$a1!!$a2','$g','$p')");
		if($query)
		{
		echo "<script> alert('Registered');
		location.href='register.php';</script>";
		}
		else
		{
			echo "<script> alert('Not registered');
			location.href='register.php';</script>";
		}
	}
?>