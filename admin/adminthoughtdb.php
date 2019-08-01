<?php
session_start();

$topic2=$_POST['content'];
if(isset($_POST["insert"]))  
	{  	   
	 	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	}

$conn=mysqli_connect("localhost","root","","obl");


	if ($topic2=="" || ($_FILES['image']['tmp_name'] == "" ))
	{
		echo "<script>alert('Content or Image is Empty please check it out!')</script>";
		echo "<script>setTimeout(\"location.href = 'adminthought.php';\",1);</script>";
	}
	else
	{		 		        
		$sql="INSERT into thoughts(content,pict) values ('$topic2','$file')";
		$query=mysqli_query($conn,$sql);
		header('location:adminthought.php');
	}
 ?>