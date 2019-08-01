<?php 
$username=$_POST['text2'];
$password=$_POST['psw'];

$username= stripcslashes($username);
$password=stripcslashes($password);

$conn=mysqli_connect("localhost","root","","obl");
$result=mysqli_query($conn,"Select email,pass from admin where email='$username' and pass='$password'");
$row=mysqli_fetch_array($result);
if ($row['email']==$username && $row['pass']==$password) 
{
	session_start();
	$_SESSION['adminemail']=$row['email'];
	$_SESSION['adminpass']=$row['pass'];
	header("Location:alluseradmin.php");
}
else {
		echo "<script>alert('Error Login! Please check Username and Password')</script>";
		echo "<script>setTimeout(\"location.href = 'admin.php';\",50);</script>";
}
?>