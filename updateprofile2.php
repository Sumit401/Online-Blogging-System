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
		div.table{
			width: 50%;
			margin-left: -30px;
			border-right: 1px solid #fff;
			float: left;
		}
		table{
			margin-left: 20px;
			color: #fff;
			font-weight: bold;
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
		input[type=text]{
					width: 100%;
					padding: 5px;
					border-radius: 5px;
					border:none;
				}
				select[name=gender3]{
					padding: 3px 3px;
					border-radius: 5px;
					border:none;
				}
				input[name=age3]
				{
					width: 50px;
					padding: 3px 3px;
					border-radius: 5px;
					border:none;
				}

		.update2{
			width: 50%;
			float: right;
			padding: 10px;
		}
	</style>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="Profile.php">Online<span>Blogger</span></a></div>
		<div id="register"><a href="logout.php"><a href="logout.php"><i class="fa fa-sign-out" style="margin-right:  10px; font-size: 1.5em;"></i>Log Out</a></div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<div id="user"><a href="Profile.php" style="color: #fff;">Welcome : <?php echo $_SESSION['name'];?></a>
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
						<tr><td colspan="3">
						<center>
						<?php 
						if (base64_encode($_SESSION['dp'])==NULL)
						{
							echo'<img src="images/pic.png" width="100px" height="100px">';
						}
						else
						echo'<img style="border-radius:50px;" src="data:image/jpeg;base64,'.base64_encode($_SESSION['dp']).'" height="100px" width="100px" class="img-thumnail"/> '
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
							<td>CONTACT NO</td>
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
			<div style="text-align: center; font-size: 30px; margin-top: 35px; font-family: Arial; text-decoration: underline;">Update Profile</div>
			<div class="update2" style="margin-top: 30px;">
				<form action="database/updateprofiledb.php" method="POST" enctype="multipart/form-data">
			<table cellspacing="20px" cellpadding="15px" style="font-family: arial black; margin-top: 20px;">
				<tr>
					<td>NAME</td>
					<td>:</td>
					<td><input type="text" name="name3" autocomplete="false"></td>
				</tr>
				<tr>
					<td>AGE</td>
					<td>:</td>
					<td><input type="number" name="age3" value="" maxlength="2" minlength="1" max="99" min="10"/></td>
				</tr>
				<tr>
					<td>GENDER</td>
					<td>:</td>
					<td><select name="gender3">
						<option value="">Select</option>
						<option value="Male">MALE</option>
						<option value="Female">FEMALE</option>
						<option value="Others">OTHERS</option>
					</select></td>
				</tr>
				<tr>
					<td>PHONE No.</td>
					<td>:</td>
					<td><input type="text" name="phone3" maxlength="10" minlength="10"/></td>
				</tr>
				<tr>
					<td>UPLOAD/CHANGE PROFILE PICTURE</td>
					<td>:</td>
					<td><input  name="image" id="image" accept="image/jpeg" type="file"></td>
				</tr>
				<tr>
					<td>PERSONAL ADDRESS</td>
					<td>:</td>
					<td><textarea cols="40" rows="5" name="address3" placeholder="Address...." style="resize: none; font-style: italic; padding: 5px; border-radius: 5px; border:none;"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td align="right"><button type="submit" name="insert" id="insert" value="insert" style="width: 80px; height: 4vh; font-family: arial black; border-radius: 5px; border:none;">UPDATE</button></td>
				</tr>
			</table>
		</form>
			<div><a href="change.php" style="color: #000; font-weight: bold; text-decoration: underline #fff; margin-top: 100px;">UPDATE PASSWORD</a></div>
			</div>
		</div>	
	</div>

</body>
</html>