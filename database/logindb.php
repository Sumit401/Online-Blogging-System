<?php 
$username=$_POST['email'];
$password=$_POST['psw'];

$username= stripcslashes($username);
$password=stripcslashes($password);

$conn=mysqli_connect("localhost","root","","obl");
$result=mysqli_query($conn,"Select email,pass,name,age,gender,phone,address,pic from regi where email='$username' and pass='$password'");
$row=mysqli_fetch_array($result);
if ($row['email']==$username && $row['pass']==$password) 
{
	session_start();
	$_SESSION['email_id']=$row['email'];
	$_SESSION['passcode']=$row['pass'];
	$_SESSION['name']=$row['name'];
	$_SESSION['age']=$row['age'];
	$_SESSION['gender']=$row['gender'];
	$_SESSION['phone']=$row['phone'];
	$_SESSION['address']=$row['address'];
	$_SESSION['dp']=$row['pic'];
	header("Location:http://localhost/semproject/profile.php");
}
else {
		echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/login.php';\",50);</script>";
		echo "<script>alert('Error Login! Please check Username and Password')</script>";
		
}
?>