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
			<?php 
						if (base64_encode($_SESSION['dp'])==NULL)
						{
							echo'<img src="images/pic.png" width="50px" height="50px" style="float: right; cursor: pointer;">';
						}
						else
						
						echo'<img style="border-radius:50px; float: right; cursor: pointer;" src="data:image/jpeg;base64,'.base64_encode($_SESSION['dp']).'" height="50px" width="50px" class="img-thumnail"/> '; ?>	
					
			<h1>Write a Blog</h1>
			<p style="color: #333; text-shadow: 0 0.5px .5px #000;"><i class="fa fa-info-circle" style="font-size: 1.5em; margin-right: 5px; color: #564363;"></i>Hey! You Can Read Here All Users Views...</p>

			<div id="box">
				<form action="database/contentdb.php" method="post">
					<div class="box-top">
						<select name="topic" style="border: none; background-color: lightblue; color: blue;">
					    	<option value="">---SELECT---</option>
					    	<option value="EDUCATION">EDUCATION</option>
					    	<option value="TECHNOLOGY">TECHNOLOGY</option>
					    	<option value="ENVIRONMENT">ENVIRONMENT</option>
					    	<option value="SOCIAL ISSUES">SOCIAL ISSUES</option>
					    	<option value="MARKETING">MARKETING</option>
					    	<option value="POEM">POEM</option>
					    	<option value="STORY">STORY</option>
					    	<option value="OTHER">OTHER</option>
					    </select>
						<button type="submit" value="submit" style="float: right; width: 100px; height: 18px; border: none; cursor: pointer; color: blue; background-color: lightblue; font-weight: bold;">POST</button>
					</div>
				<div class="box-panel" style="border-bottom:1px solid #2980b9;border-left:1px solid #2980b9;border-right:1px solid #2980b9;">
					<textarea name="text" cols="147" rows="30" style="resize: none; padding: 5px; font-weight: bold; text-align: justify; font-family: arial; border: none; outline: none;" placeholder="Write here...."></textarea>
				</div>
				</form>
			</div>
		</div>	
	</div>
</body>
</html>