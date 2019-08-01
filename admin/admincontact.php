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
	
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: 'arial';
	scroll-snap-type: y mandatory;
	overflow-y: scroll; 
}
a {
	text-decoration: none;
}

div#header {
	width: 100%;
	height: 50px;
	background-color: #2c3e50;
	margin: 0 auto; 
}

.logo {
	float: left;
	margin-top: 10px;
	margin-left: 15px;
}

.logo a {
	font-size: 1.3em;
	color: #fff;
}

.logo a span {
	font-weight: 300;
}
div#login {
	width: 50px;
	float: right;
	margin-top: 10px;
	margin-right: 15px;
	border-left: 1px solid #000;
	padding: 5px;
	padding-left: 10px;
}

div#login a{
	color: #fff;

}
div#container {
	width: 100%;
	margin: 0 auto;
}

.sidebar {
	width: 250px;
	height: calc(100% - 50px);
	background-color: #171717;
	float: left; 
}

#user{
	width: 100%;
	padding: 10px;
	background-color: #030303;
	color: #2c3e50;
	font-weight: bold;
	cursor: pointer;
	border-bottom: 1px solid #0a0a0a;
}
.content {
	width: auto;
	margin-left: 250px;
	height: calc(100% - 50px);
	background-color: #95a5a6;
	padding: 15px;
}

.content p{
	color: #424242;
	font-size: 0.72em;
}

div#box {
	margin-top: 15px;
}

div#box .box-top{
	color: #fff;
	text-shadow: 0px 1px #000;
	background-color: #2980b9;
	padding: 5px;
	padding-left: 15px;
	font-weight: 300;
}


div#box .box-panel{
	padding: 10px;
	background-color: #fff;
	color: #333;
	font-size: 20px;
	word-wrap: break-word;
}
ul#nav{
	list-style-type: none;
}

ul#nav li a {
	color: #ccc;
	display: block;
	padding: 10px;
	font-size: 0.8em;
	border-bottom: 1px solid #0a0a0a;
	-webkit-transition: 0.2s;
	-moz-transition: 0.2s;
	-o-transition: 0.2s;
	transition: 0.2s;
}

ul#nav li a:hover{
	background-color: #030303;
	color: #ffff;
	padding-left: 50px;
}

ul#nav li a.selected{
	background-color: #030303;
	color: #fff;
}

#login-form{
	width: 290px;
	height: 150px;
	margin: 180px auto;
	padding: 15px; 
}
#login-form input[type=text], input[type=password],input[name=email]{
	width: 100%;
	padding: 8px 12px;
	background-color: #fff;
	outline: none;
	border: none;
	display: inline-block;
	padding: 10px;
	margin: 5px 0 10px 0;

}

#login-form input[type=text]:focus, input[type=password]:focus {
				    background-color: #ffff99;
				    outline: none;
}

#login-form p{
	float: left;
	margin-top: 10px;
}
#login-form p a{
	color: blue;
	font-weight: bold;
	text-decoration: underline;
}



		div.content{
					overflow: auto;
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
				.box-2 li{
					margin-top: 20px;
					margin-left: 10px;
					overflow: auto;
					font-weight: bold;
				}
				.box-2{
					cursor: pointer;
				}
	</style>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="Profile.php">Online<span>Blogger</span></a></div>
		<div id="register"><a href="logout.php"><i class="fa fa-sign-out" style="margin-right:  10px; font-size: 1.5em;"></i>Log Out</a></div>
	</div>
	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<div id="user"><a href="alluseradmin.php" style="color: #fff;">Welcome : <?php echo $_SESSION['adminemail'];?> </a></div>
				<li><a href="alluseradmin.php"><i class="fa fa-users" style="margin-right:  10px; font-size: 1.5em;"></i>All Users</a></li>
				<li><a href="adminprofile.php"><i class="fa fa-rss-square" style="margin-right:  10px; font-size: 1.5em;"></i>Blogs</a></li>
				<li><a href="admincomment.php"><i class="fa fa-comments" style="margin-right:  10px; font-size: 1.5em;"></i>Comments</a></li>
				<li><a href="adminnews.php"><i class="fa fa-newspaper-o" style="margin-right:  10px; font-size: 1.5em;"></i>News</a></li>
				<li><a href="adminthought.php"><i class="fa fa-comment-o" style="margin-right:  10px; font-size: 1.5em;"></i>Thoughts</a></li>
				<li><a href="admincontact.php"><i class="fa fa-book" style="margin-right:  10px; font-size: 1.5em;"></i>Contacts</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>Contacted Users</h1>
			<p>Hey! You can see here all Users Who have Contacted you...</p>				 
			
			<?php
					$i=0;
					$conn=mysqli_connect("localhost","root","","obl");
					$result=mysqli_query($conn,"Select email,name,phone,content from contact");
					while($row=mysqli_fetch_array($result))
				{		
					if ($i%3==0) {
					
					echo'<div class="box-2" style="float: left; width: 32%; height: 200px; margin-top: 20px; margin-left: 10px; background-color: #fff; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify;"><ul style="list-style:none;"><li>Name :';
						echo $row['name']; 
						echo'</li><li>Email : ';
						echo $row['email'];
						echo'</li><li>Contact : ';
						echo $row['phone'];
						echo'</li><li>Message : ';
						echo $row['content'];
						echo'</li></ul></div>';
						$i=$i+1;
					}
					else if ($i%3==1) {
					
					
						echo'<div class="box-2" style="float: left; width: 32%; height: 200px; margin-top: 20px; margin-left: 10px; background-color: #fff; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify;"><ul style="list-style:none;"><li>Name : ';
						echo $row['name']; 
						echo'</li><li>Email : ';
						echo $row['email'];
						echo'</li><li>Contact : ';
						echo $row['phone'];
						echo'</li><li>Message : ';
						echo $row['content'];
						echo'</li></ul></div>';
						$i=$i+1;
					}

			else if ($i%3==2) {
						echo'<div class="box-2" style="float: left; width: 32%; height: 200px; margin-top: 20px; margin-left: 10px; background-color: #fff; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify;"><ul style="list-style:none;"><li>Name : ';
						echo $row['name']; 
						echo'</li><li>Email : ';
						echo $row['email'];
						echo'</li><li>Contact : ';
						echo $row['phone'];
						echo'</li><li>Message : ';
						echo $row['content'];
						echo'</li></ul></div>';
						$i=$i+1;
					}
				}
			?>


		</div>
	</div>
	
</body>
</html>