<?php
	require("connect.php");
	$n=$_POST['cname'];
	$e=$_POST['email'];
	$p=$_POST['phone'];
	$m=$_POST['message'];
	$query=mysqli_query($conn,"insert into contact(name,email,number,message) values('$n','$e','$p','$m')");
	if($query)
	{
		echo "<script> alert('Message has been sent');
		location.href='contact.php';</script>";
	}
	else
	{
		echo "<script> alert('Message not sent');
		location.href='contact.php';</script>";
	}
?>