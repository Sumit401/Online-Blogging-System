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

			#login-form{
				width: 360px;
				height: 260px;
				margin: 180px auto;
				padding: 15px;
				 
			}

	</style>
</head>

<body>

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
				
			</ul>
		</div>
		<div class="content">
			<form action="database/registerdb.php" method="post">
				<div id="login-form">
					<style type="text/css">
						input[type=email], input[type=password],input[type=text]
						{
							width: 100%;
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
						}
						.btn:hover{
							background-color: lightblue;
						}
					</style>
					<input type="text" name="yname" placeholder="Name" required="required" />
					<input type="email" name="email" placeholder="Email Id" required="required"/>
					<input type="password" name="psw" placeholder="Password" required="required" />
					<input type="text" name="contact" placeholder="Phone No." maxlength="10" minlength="10" required="required"/>
					<button class="btn" type="submit" value="submit">Register</button>
				</div>
			</form>
		</div>	
	</div>

</body>
</html>