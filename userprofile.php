<?php session_start(); ?>
<html>
<head>
	<title>OnlineBlogger</title>
	<link rel="stylesheet" type="text/css" href="styles/design.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		div.table{
			width: 50%;
			margin-left: 300px;
			border-right: 1px solid #fff;
			border-left: 1px solid #fff;
		}
		div#register{
					width: 120px;
					float: right;
					margin-top: 10px;
					padding: 2px;
				}

		div#register a{
					color: #fff;
				}
		.update a{
			font-weight: bold;
			text-decoration: underline #fff;
			font-weight: bold; 
			font-size: 20px; 
			color: #000;
			margin-left: 370px;
		}
		table{
			margin-left: 30px;
			color: #fff;
			font-weight: bold;
		}
	</style>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="profile.php">Online<span>Blogger</span></a></div>
		<div id="register"><a href="logout.php"><i class="fa fa-sign-out" style="margin-right:  10px; font-size: 1.5em;"></i>Log Out</a></div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<div id="user"><a href="profile.php" style="color: #fff;">Welcome : <?php echo $_SESSION['name'];?></a>
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
				<div class="table">
						<table cellpadding="10px" cellspacing="40px">
						<tr>
							<td colspan="3"><center>
						<?php 
						if (base64_encode($_SESSION['dp'])==NULL)
						{
							echo'<img src="images/pic.png" width="100px" height="100px">';
						}
						else
						{
						echo'<img style="border-radius:50px;" src="data:image/jpeg;base64,'.base64_encode($_SESSION['dp']).'" height="100px" width="100px" class="img-thumnail"/> '; 
						}
						?>
					</center></td>
						</tr>
						<tr>
							<td>NAME</td>
							<td style="color: #000;">:</td>
							<td><?php echo $_SESSION['name'];?></td>
						</tr>
						<tr>
							<td>AGE</td>
							<td style="color: #000;">:</td>
							<td><?php echo $_SESSION['age'];?></td>
						</tr>
						<tr>
							<td>GENDER</td>
							<td style="color: #000;">:</td>
							<td><?php echo $_SESSION['gender'];?></td>
						</tr>
						<tr>
							<td>PHONE NUMBER</td>
							<td style="color: #000;">:</td>
							<td><?php echo $_SESSION['phone'];?></td>
						</tr>
						<tr>
							<td>EMAIL ID</td>
							<td style="color: #000;">:</td>
							<td><?php echo $_SESSION['email_id'];?></td>
						</tr>
						<tr>
							<td>ADDRESS</td>
							<td style="color: #000;">:</td>
							<td><?php echo $_SESSION['address'];?></td>
						</tr>
					</table>
			</div>
			<div class="update" style="margin-top: 15px;">
				<a href="updateprofile2.php">Update Profile</a>
			</div>
		</div>	
	</div>

</body>
</html>