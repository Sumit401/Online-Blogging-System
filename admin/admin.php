<html>
<head>
	<title>OnlineBlogger</title>
<link rel="stylesheet" type="text/css" href="\\styles/design.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
	<?php //here ?>
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
<?php //here ?>

		div#register{
					width: 180px;
					float: right;
					margin-top: 10px;
					
				}

		div#register a{
					color: #fff;
				}
				div#login {
				width: 130px;
				float: right;
				margin-top: 6px;
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
		<div class="logo"><a href="http://localhost/semproject/index.php">Online<span>Blogger</span></a></div>
		<div id="login"><a href="http://localhost/semproject/login.php"><i class="fa fa-sign-in" style="margin-right:  10px; font-size: 1.5em;"></i>User Login</a></div>
		<div id="register"><a href="http://localhost/semproject/register.php"><i class="fa fa-user-plus" style="margin-right:  10px; font-size: 1.5em;"></i>User Registration</a></div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a class="selected" href="http://localhost/semproject/index.php"><i class="fa fa-home" style="margin-right:  10px; font-size: 1.5em;"></i>Home</a></li>
				<li><a href="http://localhost/semproject/about.php"><i class="fa fa-info-circle" style="margin-right:  10px; font-size: 1.5em;"></i>About Us</a></li>
				<li><a href="http://localhost/semproject/news.php"><i class="fa fa-newspaper-o" style="margin-right:  10px; font-size: 1.5em;"></i>News</a></li>
				<li><a href="http://localhost/semproject/thought.php"><i class="fa fa-comment-o" style="margin-right:  10px; font-size: 1.5em;"></i>Thoughts</a></li>
				<li><a href="http://localhost/semproject/login.php"><i class="fa fa-rss-square" style="margin-right:  10px; font-size: 1.5em;"></i>Read Blogs</a></li>
				<li><a href="http://localhost/semproject/contact.php"><i class="fa fa-address-book-o" style="margin-right:  10px; font-size: 1.5em;"></i>Contact Us</a></li>
			</ul>
			
		</div>
		<div class="content">
			<form method="post" action="admindb.php">
			<div id="login-form2">
				<h3 style="color: orange; text-shadow: 0 1px 1px #000;">Admin Login</h3>
					
					<i class="fa fa-user-o" style="float: left; font-size: 1.5em; margin-top: 28px; margin-right: 10px;"></i><input type="text" name="text2" required="required" placeholder="Admin ID" style="margin-top: 20px;" />
					<i class="fa fa-key" style="float: left; font-size: 1.3em; margin-top: 28px; margin-right: 10px;"></i>
					<input type="password" required="required" name="psw" placeholder="Passcode" style="margin-top: 20px;" />
					<button class="btn" type="submit" value="submit" >Login</button>
					
				</div>
				</form>
				<style>
					
					#login-form2{
						width: 400px;
						height: 230px;
						margin: 180px auto;
						padding: 15px;
						color: #fff;
						background-color: #000; 
						border: 1px solid #000;
						border-radius: 5px;
						}
					#login-form2 input[type=text], input[type=password]{
							width: 90%;
							padding: 8px 12px;
							background-color: #fff;
							outline: none;
							border: none;
							display: inline-block;
							padding: 10px;
							margin: 5px 0 10px 0;
							border-radius: 5px;

						}
					.btn{
							width: 75px;
							height: 30px;
							float: right;
							border: none;
							outline: none;
							cursor: pointer;
							color: #fff;
							background-color: #2980b9;
							border-radius: 5px;
							margin-right: 5px;
						}
						
					.btn:hover{
							background-color: lightblue;
						}
					</style>
		</div>

</body>
</html>