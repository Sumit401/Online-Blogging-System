

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
			<div class="contact">
				CONTACT

				<style>
					.contact{
						width: 100%;
						text-align: center;
						font-size: 3em;
						margin-top: 10px;
						padding-bottom: 10px;
						border-bottom: 1px solid lightgray;
						color: #fff;
					}
				</style>
			</div>
			<div class="para">
				<p>We'd <i class="fa fa-heart" style="color: black;"></i> to help!</p>
				<p style="font-size: 0.4em; margin-top: 10px;">We like to create things with fun, open-minded people. Feel free to say hello!</p>
				<div style="float: right; "><img src="images/qr.png" style="width: 200px; height: 200px; float: right;  margin-right: 20px; margin-top: -45px;">
</div>
				<style>
					.para{
						width: 100%;
						text-align: center;
						font-size: 2em;
						margin-top: 10px;
					}
					.para p{
						color: lightgray;
					}
				</style>
			</div>
			<div class="msg">
				<img src="images/desk.png" width="400px" height="400">
				<div class="form">
					<form action="database/contactdb.php" method="post">
						<input type="text" name="name" placeholder="Your Full Name" />
						<input type="email" name="email" placeholder="Contact Email" />
						<input type="text" name="phone" placeholder="Contact Number" style="margin-top:-5px" />
						<textarea cols="41" rows="4" name="text" style="margin-top:5px;text-align:justify-all;font-style: italic; resize: none; border-radius: 5px; padding: 5px;" placeholder="Mesage"></textarea>
						<button class="btn2" type="submit" value="submit">Send</button>
					</form>
				<style>
					.form{
						width: 350px;
						height: 225px;
						margin-top: -370px;
						margin-left: 25px;
					}
					input[type=text],input[type=email]{
						width: 350px;
						height: 35px;
						padding: 10px;
						border-radius: 5px;
						border: none;
					}
					.btn2{
						width: 100px;
						height: 30px;
						cursor: pointer;
						margin-top: 5px;
						margin-left: 120px;
						background: gray;
						border-radius: 5px;
						border: none;
						color: #fff;
						box-shadow: 0 1px 1px #000;
					}
				</style>
				</div>
				<style>
					.msg{
						width: 40%;
						height: 380px;
						margin-top: 50px; 
						margin-left: 100px;
						float: left;
						padding: 20px;
					}
				</style>
			</div>
			<div class="links" style="margin-top: -40px;">
				<div class="add"><a href="https://www.google.com/maps/place/37%C2%B025'17.4%22N+122%C2%B005'02.8%22W/@37.4214225,-122.0864399,17z/data=!4m5!3m4!1s0x0:0x0!8m2!3d37.421512!4d-122.084101?hl=en">
					<i class="fa fa-map-marker" style="float: left; font-size: 2em; margin-top: 5px; color: #fff;"></i></a>
					Building 43,1600 Amphitheatre Parkway, Mountain View,<br> CA 94043 United States.

					<style>
						.add{
							margin-left: 10px;
							color: lightgray;
							font-style: italic;
							margin-bottom: 10px;
							text-align: center;
							margin-top: 100px;
							overflow: auto;
						}
					</style>
				</div>
				<div class="cont">
					<i class="fa fa-phone" style="float: left; font-size: 2em; margin-top: 25px;"></i>
					<li>Sumit</li>
					<li>Shubham Kumar Sinha</li>
					<li>Uttam Kumar</li>
					<style>
						.cont{
							list-style: none;
							margin-left: 10px;
							color: #fff;
							margin-bottom: 20px; 
							text-align: center;
						}
					</style>
				</div>
				<div class="mail">
					<i class="fa fa-envelope" style="float: left; font-size: 1.5em; color: #fff"></i>
					<p style="margin-bottom: 60px; text-align: center; font-weight: bold; color: #000; font-size: 1em;">onlineblogger@gmail.com</p>

					<style>
						.mail{
							margin-left: 10px;
							border-bottom: 2px solid gray;
						}
					</style>
				</div>
				<div class="link">
					<a href="https://www.facebook.com"><i class="fa fa-facebook" style="float: left; font-size: 1.5em; color: #fff; margin-left: 200px; "></i></a>
					<a href="https://www.linkedin.com"><i class="fa fa-linkedin" style="float: left; font-size: 1.5em; color: #fff; margin-left: 10px;"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter" style="float: left; font-size: 1.5em; color: #fff; margin-left: 10px;"></i></a>
					<a href="https://www.gmail.com"><i class="fa fa-google-plus" style="float: left; font-size: 1.5em; color: #fff; margin-left: 10px;"></i></a>
					<a href="https://www.youtube.com"><i class="fa fa-youtube" style="float: left; font-size: 1.5em; color: #fff; margin-left: 10px;"></i></a>
					<a href="https://www.instagram.com"><i class="fa fa-instagram" style="float: left; font-size: 1.5em; color: #fff; margin-left: 10px;"></i></a>
					<a href="https://whatsapp://send?text=www.onlineblogger.com" data-action="share/whatsapp/share"><i class="fa fa-whatsapp" style="float: left; font-size: 1.5em; color: #fff; margin-left: 10px;"></i></a>

					<style>
						.link{
							margin-left: 10px;
							margin-top: 10px;
						}
					</style>
				</div>
				<style>
					.links{
						width: 50%;
						height: 380px;
						margin-top: 80px; 
						float: right;



					}
				</style>
			</div>
		</div>	
	</div>

</body>
</html>