<?php 
session_start();
//blog posting
$email3=$_SESSION['email_id'];
$name=$_SESSION['name'];
$age=$_SESSION['age'];
$gender=$_SESSION['gender'];
$pic=$_SESSION['dp'];
$topic2=$_POST['topic'];
$text=$_POST['text'];

	$host="localhost";
	$dbusername="root";
	$dbpswd="";
	$dbname="obl";

	if ($name=="" || $age==""|| $gender==""||$pic=="") 
	{
		echo "<script>alert('Please Update your Profile to publish on the Blog!')</script>";
		echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/updateprofile2.php';\",50);</script>";
	}

	else if ($topic2=="" || $text=="") 
	{
		echo "<script>alert('Topic or content is Empty please check it out!')</script>";
		echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/writeview.php';\",50);</script>";
	}
	else
	{
		$conn=mysqli_connect($host,$dbusername,$dbpswd,$dbname);		 		        
		$sql="INSERT into view(email,topic,content,name) values ('$email3','$topic2','$text','$name')";
		$query=mysqli_query($conn,$sql);
		header('location:http://localhost/semproject/profile.php');
	}
 ?>