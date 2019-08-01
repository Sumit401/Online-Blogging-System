<?php 
$topic1=$_POST['content'];
$topic2=$_POST['head'];

	$host="localhost";
	$dbusername="root";
	$dbpswd="";
	$dbname="obl";

	if ($topic2=="")
	{
		echo "<script>alert('Content or Heading is Empty please check it out!')</script>";
		echo "<script>setTimeout(\"location.href = 'adminnews.php';\",50);</script>";
	}
	else
	{
		$conn=mysqli_connect($host,$dbusername,$dbpswd,$dbname);		 		        
		$sql="INSERT into news(content,heading) values ('$topic1','$topic2')";
		$query=mysqli_query($conn,$sql);
		header('location:adminnews.php');
	}
 ?>