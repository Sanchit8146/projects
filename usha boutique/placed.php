<?php
	require_once("connect.php");
	$id=$_POST['oid'];
	$un=$_POST['uname'];
	$design=$_POST['designs'];
	$date=$_POST['date'];
	$details=$_POST['details'];
	$alter=$_POST['chk'];
	$alter1=implode(", ", $alter);	
	$snap= "default.jpg" ;
		if($_FILES["snap"]["error"]==0)
		{
			$type=$_FILES["snap"]["type"];
			$temp=explode("/",$type);
			$ext=$temp[1];			
			if($ext=="jpg" || $ext=="jpeg" || $ext=="pjpeg" || $ext=="gif" || $ext=="png")
			{
				$snap=$un."-".$id.".".$ext;
				$newpath="images/".$snap;
				move_uploaded_file($_FILES["snap"]["tmp_name"],$newpath);
			}				
		}
	$query=mysqli_query($conn,"insert into place(oid,username,design,date,details,alteration,pic) values('$id','$un','$design','$date','$details','$alter1','$snap')");
	if($query)
	{
		echo "<script> alert('Order Placed');
		location.href='order.php';</script>";
	}
		else
	{
		echo "<script> alert('Not placed');
		location.href='order.php';</script>";
	}
?>