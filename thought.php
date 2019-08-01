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
		<style>
					.panel-1{
						width: 90%;
						height: 70px;
						border-radius: 5px;
						margin-top: 20px;
						float: right;
						border-bottom: 1px solid #000;
						overflow: auto;
						font-family: arial;
						margin-bottom: 20px;
					}
					.panel-2{
						width: 90%;
						height: 70px;
						border-radius: 5px;
						margin-top: 20px;
						float: left;
						border-bottom: 1px solid #eee;
						overflow: auto;
						font-family: arial;
						margin-bottom: 20px;
					}
					.pic{
						width: 100px;
						height: 100px;
						float: left;
						margin-top: 10px;
						border-radius: 100%;
						background: #ddd;
					}
					.pic2{
						width: 100px;
						height: 100px;
						float: right;
						margin-right: 5px;
						margin-top: 10px;
						border-radius: 100%;
						background: #ddd;
					}
				</style>
		<div class="content" style="overflow: auto;">
			<h1 style="color: #000; text-align: center;">Thoughts for the Day</h1>
			 <?php			
			 			$i=0;
						$conn=mysqli_connect("localhost","root","","obl");
						$result=mysqli_query($conn,"Select pict,content from thoughts");
						while($row=mysqli_fetch_array($result))
					{	

						if($i%2==0)
						{
							if (base64_encode($row['pict'])==NULL)
								{
								echo '<div class="pic">';
								echo'<img src="images/pic.png" width="100px" height="100px">';
								echo'</div>';
								}
							else
								{
								echo '<div class="pic">';
								echo'<img style="border-radius:50px;" src="data:image/jpeg;base64,'.base64_encode($row['pict']).'" height="100px" width="100px" class="img-thumnail"/> '; 
								echo'</div>';
								} 
							echo'<div class="panel-1">';
							echo $row['content'];
							echo'</div>';
							$i=$i+1;
						}
						else
						{
							echo'<div class="panel-2">';
							echo $row['content'];
							echo'</div>';
							if (base64_encode($row['pict'])==NULL)
								{
								echo '<div class="pic2">';
								echo'<img src="images/pic.png" width="100px" height="100px">';
								echo'</div>';
								}
							else
								{
								echo '<div class="pic">';
								echo'<img style="border-radius:50px;" src="data:image/jpeg;base64,'.base64_encode($row['pict']).'" height="100px" width="100px" class="img-thumnail"/> '; 
								echo'</div>';
								} 
							$i=$i+1;		
						}
					}	

						 ?>
			
		</div>	
	</div>

</body>
</html>