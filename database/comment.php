<?php
session_start();
$name=$_SESSION['name']; 
$email=$_SESSION['email_id'];
$topic1=$_POST['comment'];
$id2=$_GET['id'];

$conn=mysqli_connect("localhost","root","","obl");
	if ($topic1=="")
	{
		echo "<script>alert('Comment Empty please check it out!')</script>";
		echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/reading.php';\",50);</script>";
	}
	else
	{	 		        
		$sql="INSERT into comment(pid,content,name,email) values ('$id2','$topic1','$name','$email')";
		$query=mysqli_query($conn,$sql);
		header('location:http://localhost/semproject/reading.php?id='.urlencode($id2));
	}
 ?>