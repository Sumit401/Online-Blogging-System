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
			<h1>Blogs</h1>
			<p>Hey! You can control here all users Blog...</p>
			<div id="box">
				 <?php 
					$conn=mysqli_connect("localhost","root","","obl");
					$result=mysqli_query($conn,"Select id,name,email,topic,content,date,up,down from view");
					while($row=mysqli_fetch_array($result))
				{		
						$p_id=$row['id'];
						echo'<div class="box-top">';
						echo $row['name'];
						echo' | Topic : ';
						echo $row["topic"];
						echo' | Date : ';
						echo $row["date"];
						echo "</div>";
						echo '<div class="box-panel" style="margin-bottom:10px; height:200px; font-size: 1.2em; overflow:scroll; "><p>';
						echo $row['content'];
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
						echo '<a href="deleteadmin.php?id='.urlencode($p_id).'" style="color:#000; font-size:15px; margin-left:1050px; ">Delete</a></p>';
						echo "</div>";
						echo "<br>";
					}

					 ?>
		</div>
	</div>
	
</body>
</html>
