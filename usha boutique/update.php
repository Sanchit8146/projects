<?php
	require_once("connect.php");
	$id=$_POST['oid'];
	$un=$_POST['uname'];
	$design=$_POST['designs'];
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
				$snap=$un.$id.".".$ext;
				$newpath="images/".$snap;
				move_uploaded_file($_FILES["snap"]["tmp_name"],$newpath);
			}				
		}
	if(empty($_FILES["snap"]["type"])) 
	{
		$query="update place set design='$design', details='$details', alteration='$alter1' where oid=$id";
		$query1=mysqli_query($conn,$query);
	}
	else
	{
	$query="update place set design='$design', details='$details', alteration='$alter1', pic='$snap' where oid=$id";
	$query1=mysqli_query($conn,$query);
	}
	if($query1)
	{
		echo '<script>alert("Updated Successfully..");
		location.href="odetails.php"</script>';
	}
	else
	{
		echo '<script>alert("Updation failed...");
		location.href="edit.php";</script>';
	}
?>