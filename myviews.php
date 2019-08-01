<?php 
session_start();
 ?>
<html>
<head>
	<title>OnlineBlogger</title>
	<link rel="stylesheet" type="text/css" href="styles/design.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		
				div#register{
					width: 120px;
					float: right;
					margin-top: 10px;
					padding: 2px;
				}

		div#register a{
					color: #fff;
				}
	</style>
	<style type="text/css">
		div.content{
					overflow: auto;
				}
	</style>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="profile.php">Online<span>Blogger</span></a></div>
		<div id="register"><a href="logout.php"><a href="logout.php"><i class="fa fa-sign-out" style="margin-right:  10px; font-size: 1.5em;"></i>Log Out</a></div>
	</div>
	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<div id="user"><a href="profile.php" style="color: #fff;">Welcome : <?php echo $_SESSION['name'];?> </a>
				<p style="color: #ffffcc;">(<?php echo $_SESSION['email_id']; ?>)</p></div>
				<li><a href="profile.php"><i class="fa fa-home" style="margin-right:  10px; font-size: 1.5em;"></i>Home</a></li>
				<li><a href="userprofile.php"><i class="fa fa-user-circle" style="margin-right:  10px; font-size: 1.5em;"></i>Profile</a></li>
				<li><a href="writeview.php"><i class="fa fa-pencil-square-o" style="margin-right:  10px; font-size: 1.5em;"></i>Write a Blog</a></li>
				<li><a href="myviews.php"><i class="fa fa-rss-square" style="margin-right:  10px; font-size: 1.5em;"></i>My Blog</a></li>
				<li><a href="about.php"><i class="fa fa-info-circle" style="margin-right:  10px; font-size: 1.5em;"></i>About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-address-book-o" style="margin-right:  10px; font-size: 1.5em;"></i>Contact Us</a></li>
			</ul>
		</div>
		<div class="content">
			<?php 
						if (base64_encode($_SESSION['dp'])==NULL)
						{
							echo'<img src="images/pic.png" width="50px" height="50px" style="float: right; cursor: pointer;">';
						}
						else
						
						echo'<img style="border-radius:50px; float: right; cursor: pointer;" src="data:image/jpeg;base64,'.base64_encode($_SESSION['dp']).'" height="50px" width="50px" class="img-thumnail"/> '; ?>			
			<h1>My Blog</h1>
			<p>Hey! You can read here your views...</p>
			<div id="box">
				 <?php 
					$conn=mysqli_connect("localhost","root","","obl");
					$email=$_SESSION['email_id'];
					$result=mysqli_query($conn,"Select id,name,email,topic,content,date,up,down from view where email='$email'");
					while($row=mysqli_fetch_array($result))
				{		
						$p_id=$row['id'];

						$string = strip_tags($row['content']);
						if (strlen($string) > 180) {

					    // truncate string
					    $stringCut = substr($string, 0, 160);
					    $endPoint = strrpos($stringCut, ' ');

					    //if the string doesn't contain any space then it will cut without word basis.
					    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
					    $string .= '......<a href="reading.php?id='.urlencode($p_id).'">Read More</a>';
					}
						echo'<div class="box-top">';
						echo $row['name'];
						echo' | Topic : ';
						echo $row["topic"];
						echo' | Date : ';
						echo $row["date"];
						echo "</div>";
						echo '<div class="box-panel" style="margin-bottom:10px; font-size: 1.2em;" ><p>';
						echo $string;
						echo "</p>";
						echo "</div>";
						echo'<div class="box-top" style="margin-top:-10px; box-shadow:0 1px 1px black;">';
						echo '<p><i class="fa fa-thumbs-o-up" style="font-size:26px;"></i>&nbsp;<span class="w3-badge">';
						echo $row['up'];
						echo'</span>';
						echo' &nbsp;&nbsp;&nbsp;&nbsp;'; 
						echo'<i class="fa fa-thumbs-o-down" style="font-size:26px;">&nbsp;</i><span class="w3-badge">';
						echo $row['down'];
						echo'</span>';
						echo '<a href="database/delete.php?id='.urlencode($p_id).'" style="color:#000; font-size:15px; margin-left:1050px; ">Delete</a></p>';
						echo "</div>";
						echo "<br>";
					}

					 ?>
			</div>
		</div>
	</div>
</body>
</html>
