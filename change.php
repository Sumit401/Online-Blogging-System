<?php 
//for changing the password
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
			border-right: 1px solid #fff;
		}
		.update a{
			color: #fff; font-weight: bold;
			text-decoration: underline #000;
		}
		table{
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
	</style>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="#">Online<span>Blogger</span></a></div>
		<div id="register"><a href="logout.php"><i class="fa fa-sign-out" style="margin-right:  10px; font-size: 1.5em;"></i>Log Out</a></div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<div id="user"><a href="profile.php" style="color: #fff;">Welcome : <?php echo $_SESSION['name'];?></a>
				<p style="color: #ffffcc;">(<?php echo $_SESSION['email_id']; ?>)</p>
				</div>
				<li><a href="profile.php"><i class="fa fa-home" style="margin-right:  10px; font-size: 1.5em;"></i>Home</a></li>
				<li><a href="userprofile.php"><i class="fa fa-user-circle" style="margin-right:  10px; font-size: 1.5em;"></i>Profile</a></li>
				<li><a href="writeview.php"><i class="fa fa-pencil-square-o" style="margin-right:  10px; font-size: 1.5em;"></i>Write a Blog</a></li>
				<li><a href="myviews.php"><i class="fa fa-rss-square" style="margin-right:  10px; font-size: 1.5em;"></i>My Blog</a></li>
				<li><a href="about.php"><i class="fa fa-info-circle" style="margin-right:  10px; font-size: 1.5em;"></i>About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-address-book-o" style="margin-right:  10px; font-size: 1.5em;"></i>Contact Us</a></li>
			</ul>
		</div>
		<div class="content">
				<div class="info4">
			<form action="database/changedb.php" method="POST">
			<center><table cellpadding="50" cellspacing="20" style="font-family: arial black; margin-top: 50px;">
				<tr>
					<td>Old Password</td>
					<td>:</td>
					<td><input type="password" name="cp1" id="cp1" minlength="6" maxlength="16" required="required" placeholder="***************"></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td>:</td>
					<td><input type="password" name="cp2" id="cp2" minlength="6" maxlength="16" required="required" placeholder="***************" ></td>
				</tr>
				<tr>
					<td>Re-Enter Password</td>
					<td>:</td>
					<td><input type="password" name="cp3" id="cp3" minlength="6" maxlength="16" required="required" placeholder="***************"></td>
				</tr>
				
				<tr>
					<td style="font-family: arial; color: red;"></td>
					<td colspan="2" align="right">
						<button type="submit" value="submit" style="width: 100px; height: 4vh; font-family: arial black; margin-right: 0px; border:none; border-radius: 5px; cursor: pointer; ">UPDATE
						</button></td>
				</tr>
			</table></center>
			</form>
			<style type="text/css">
				.info4{
					width: 500px;
					height: 40vh;
					margin: auto;
					margin-top: 100px;
				}
				input[type=password]{
					width: 100%;
					height: 30px;
					padding: 10px;
					border-radius: 5px;
					border:none;
				}
			</style>
		
		</div>	
	</div>

</body>
</html>