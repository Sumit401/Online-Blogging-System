<?php
session_start();

$email3=$_SESSION['email_id'];
$pass=$_SESSION['passcode'];
$name3=$_POST['name3'];
$age3=$_POST['age3'];
$gender3=$_POST['gender3'];
$phone3=$_POST['phone3'];
$address3=$_POST['address3'];
if(isset($_POST["insert"]))  
	{  	   
	 	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	}

if ($name3=="") {
	$name3=$_SESSION['name'];
}
if ($age3=="") {
	$age3=$_SESSION['age'];
}
if ($gender3=="") {
	$gender3=$_SESSION['gender'];
}
if ($phone3=="") {
	$phone3=$_SESSION['phone'];
}
if ($address3=="") {
	$address3=$_SESSION['address'];
}

	$conn=mysqli_connect("localhost","root","","obl");

	if (mysqli_connect_error()) {
		die("Connection Error('.mysqli_connect_errno()').mysqli_connect_error");
	}
	else
	{		 	
			 	if ($_FILES['image']['tmp_name'] == "" ) 
			 	{
			 	$sql1="UPDATE regi SET name='$name3', age='$age3',gender='$gender3',phone='$phone3',
				address='$address3' WHERE email='$email3'";
				$query=mysqli_query($conn,$sql1);	
			 	}
			 	else
			 	{
				$sql4="UPDATE regi SET name='$name3', age='$age3',gender='$gender3',phone='$phone3',
				address='$address3',pic='$file' WHERE email='$email3'";
				$query=mysqli_query($conn,$sql4);
				}
	}
	$result=mysqli_query($conn,"Select email,pass,name,age,gender,phone,address,pic from regi where email='$email3'");
	$row=mysqli_fetch_array($result);
		if ($row['email']==$email3) 
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
		}
		header("Location:http://localhost/semproject/updateprofile2.php");

?>