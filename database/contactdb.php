<?php 
session_start();
//comment posting
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$text=$_POST['text'];

	$host="localhost";
	$dbusername="root";
	$dbpswd="";
	$dbname="obl";

	if ($name=="" || $email==""|| $phone==""||$text=="") 
	{
		echo "<script>alert('Please Update your Profile to publish on the Blog!')</script>";
		echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/contact.php';\",50);</script>";
	}
	else
	{
		$conn=mysqli_connect($host,$dbusername,$dbpswd,$dbname);		 		        
		$sql="INSERT into contact(email,name,phone,content) values ('$email','$name','$phone','$text')";
		$query=mysqli_query($conn,$sql);
		header('location:http://localhost/semproject/contact.php');
	}
 ?>