<?php 
session_start();

// to change password redirected from change.php

$cp1=$_POST['cp1'];
$cp2=$_POST['cp2'];
$cp3=$_POST['cp3'];
$pass4=$_SESSION['passcode'];
$email5=$_SESSION['email_id'];

$conn=mysqli_connect("localhost","root","","obl");
if ($cp2==$cp3)
{
$result=mysqli_query($conn,"SELECT pass FROM regi WHERE email='$email5'");
$row=mysqli_fetch_array($result);

		if ($row['pass']==$cp1) 
		{
		$sql="UPDATE regi SET pass='$cp2' WHERE email='$email5'";
		$query=mysqli_query($conn,$sql);
		echo "<script>alert('Password Sucessfully Changed!')</script>";
		session_destroy();
		echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/login.php';\",100);</script>";
		}
		else
		{
			echo "<script>alert('Old Password Donot match with Database')</script>";
			echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/change.php';\",50);</script>";
		}
}
else
{
	echo "<script>alert('Re-Entered Password Donot match')</script>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/change.php';\",50);</script>";
}
?>
