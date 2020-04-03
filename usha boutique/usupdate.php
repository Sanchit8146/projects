<?php
	require("connect.php");
	$fn=$_POST['fname'];
	$cn=$_POST['cnum'];
	$un=$_POST['uname'];
	$ad1=$_POST['stadd'];
	$ad2=$_POST['add2'];
	$e=$_POST['email'];
	$g=$_POST['gender'];
	$p=$_POST['pass'];
	$query=mysqli_query($conn,"update register set fullname='$fn',contactno='$cn',email='$e',address='$ad1!!$ad2', gender='$g',password='$p' where username='$un'");
	if($query)
	{
	echo "<script> alert('Updated Successfully');
	location.href='index.php';</script>";
	}
	else
	{
		echo "<script> alert('Not Updated');
		location.href='udetails.php';</script>";
	}
?>