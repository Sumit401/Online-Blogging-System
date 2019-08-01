<?php 
$conn=mysqli_connect("localhost","root","","obl");
$id2=$_GET['id'];
$result=mysqli_query($conn,"SELECT down from view where id='$id2'");
$row=mysqli_fetch_array($result);
$k=$row['down'];
$k=$k+1;
$sql1="UPDATE view SET down='$k' WHERE id='$id2'";
$query=mysqli_query($conn,$sql1);
header("Location:http://localhost/semproject/reading.php?id=".urlencode($id2)."");
 ?>