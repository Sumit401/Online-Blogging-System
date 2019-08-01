
<html>
<head>
	<title>OnlineBlogger</title>
<link rel="stylesheet" type="text/css" href="styles/design.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		div#register{
					width: 105px;
					float: right;
					margin-top: 10px;
					
				}

		div#register a{
					color: #fff;
				}
				div#login {
				width: 90px;
				float: right;
				margin-top: 8px;
				margin-right: 15px;
				border-left: 1px solid #000;
			}

			div#login a{
				color: #fff;

			}
	</style>
</head>

<body>
<!---Main Page of Project -->
	<div id="header">
		<div class="logo"><a href="index.php">Online<span>Blogger</span></a></div>
		<div id="login"><a href="login.php"><i class="fa fa-sign-in" style="margin-right:  10px; font-size: 1.5em;"></i>Login</a></div>
		<div id="register"><a href="register.php"><i class="fa fa-user-plus" style="margin-right:  10px; font-size: 1.5em;"></i>Register</a></div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a class="selected" href="index.php"><i class="fa fa-home" style="margin-right:  10px; font-size: 1.5em;"></i>Home</a></li>
				<li><a href="about.php"><i class="fa fa-info-circle" style="margin-right:  10px; font-size: 1.5em;"></i>About Us</a></li>
				<li><a href="news.php"><i class="fa fa-newspaper-o" style="margin-right:  10px; font-size: 1.5em;"></i>News</a></li>
				<li><a href="thought.php"><i class="fa fa-comment-o" style="margin-right:  10px; font-size: 1.5em;"></i>Thoughts</a></li>
				<li><a href="login.php"><i class="fa fa-rss-square" style="margin-right:  10px; font-size: 1.5em;"></i>Read Blogs</a></li>
				<li><a href="contact.php"><i class="fa fa-address-book-o" style="margin-right:  10px; font-size: 1.5em;"></i>Contact Us</a></li>
				<li><a href="admin/admin.php"><i class="fa fa-user-secret" style="margin-right:  10px; font-size: 1.5em;"></i>Admin</a></li>
			</ul>
			
		</div>
		<div class="content">
			<img src="images/blogger-logo.png" width="200px" style="float: left; margin-top: 10px;">
			<div align="right" style=" margin-right: 20px; margin-top: 10px;">
				<iframe src="http://free.timeanddate.com/clock/i6jynhnh/n1648/tlin/fn6/fs16/fcfff/tc000/ftb/bas2/bat1/bacfff/pa8/tt0/tw1/th1/ta1/tb4" frameborder="0" width="212" height="60"></iframe>
				<!-------<iframe src="http://free.timeanddate.com/clock/i6jyn6so/n1648/tlin/fn6/fs18/tc95a5a6/pc95a5a6/ftb/bacfff/pa8/tt0/tw1/th1/ta1/tb4" frameborder="0" width="234" height="62"></iframe>------>
			</div>

			<h1>Welcome</h1>
			<p style="text-align: center; color: #000; font-size: 1em;">We like to create things with fun, open-minded people. Feel free to say hello!</p>
			<style>
				h1{
					text-align: center;
					margin-top: 150px;
					font-size: 6em;
					color: #fff;
					text-shadow: 0 1px 1px #000;
				}
			</style>

	</div>

</body>
</html>