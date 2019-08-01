<?php 
$email=$_POST['email'];
$pswd=$_POST['psw'];
$phone=$_POST['contact'];
$name=$_POST['yname'];
$conn=mysqli_connect("localhost","root","","obl");

$quer=mysqli_query($conn,"SELECT email from regi where email='$email'");
$row=mysqli_fetch_array($quer);

	if ($row['email']==$email) 
		{
		echo "<script>alert('Account with this Email Id Already Exist in Database please try with new Email')</script>";
		echo "<script>setTimeout(\"location.href = 'http://localhost/semproject/register.php';\",50);</script>";
		}
	else
	{
		$sql="INSERT INTO regi (email,pass,phone,name) VALUES ('$email','$pswd','$phone','$name')";
		$query=mysqli_query($conn,$sql);
		header("Location:http://localhost/semproject/login.php");
	}

?>
