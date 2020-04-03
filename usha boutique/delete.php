<?php 
	require_once("connect.php");
	$id=$_GET["id"];
	$del=mysqli_query($conn,"select * from place where oid=$id");
	while($row=mysqli_fetch_array($del))
	{
		$img=$row["pic"];
	}
	unlink("images/".$img);
	$query=mysqli_query($conn,"delete from place where oid=$id");
	if($query)
	{
		echo '<script>alert("Order Cancelled..");
		location.href="odetails.php"</script>';
	}
	else
	{
		echo '<script>alert("Cancellation failed...");
		location.href="odetails.php";</script>';
	}
?>