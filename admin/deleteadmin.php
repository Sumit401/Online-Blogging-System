
<?php 
	//from myviews.php
	$conn=mysqli_connect("localhost","root","","obl");
	$id2=$_GET['id'];
	$result=mysqli_query($conn,"DELETE from view where id='$id2' LIMIT 1");
	$result2=mysqli_query($conn,"DELETE from comment where id='$id2' LIMIT 1");
	header("Location:adminprofile.php");
?>

