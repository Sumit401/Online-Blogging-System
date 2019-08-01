<?php 
	//from myviews.php
	$conn=mysqli_connect("localhost","root","","obl");
	$id2=$_GET['id'];
	$result2=mysqli_query($conn,"DELETE from comment where id='$id2'");
	header("Location:admincomment.php");
?>