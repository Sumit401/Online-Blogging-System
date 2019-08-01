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
		<div class="content" style="overflow: auto;">
			<h1 style="color: orange; text-shadow: 0 1px 1px #000;">News</h1>

			<?php 
						$i=0;
						$conn=mysqli_connect("localhost","root","","obl");
						$result=mysqli_query($conn,"Select heading,content from news");
						while($row=mysqli_fetch_array($result))
					{	
					if ($i%3==0) {

				echo'<div class="box-1" style="float: left; width: 33%; height: 200px; margin-top: 20px; background-color: #ddd; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify; overflow:auto;"><h3 style="font-size: 1em; overflow:auto;">';
				echo $row['heading'];
				echo'</h3><p style="color: #000; font-size: 0.9em; margin-top: 10px;">';
				echo $row['content'];
				echo'</p></div>';
				$i=$i+1;
				}
				else if ($i%3==1) {
				echo'<div class="box-2" style="float: left; width: 32%; height: 200px; margin-top: 20px; margin-left: 10px; background-color: #ddd; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify; overflow:auto;"><h3 style="font-size: 1em;">';
				echo $row['heading'];
				echo'</h3><p style="color: #000; font-size: 0.9em; margin-top: 10px;">';
				echo $row['content'];
				echo'</p></div>';
				$i=$i+1;
				}
				else
				{
				echo'<div class="box-3" style="float: left; width: 33%; height: 200px; margin-top: 20px; margin-left: 10px; background-color: #ddd; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify; overflow:auto;">

				<h3 style="font-size: 1em;">';
				echo $row['heading'];
				echo'</h3>
				<p style="color: #000; font-size: 0.9em; margin-top: 10px;">';
				echo $row['content'];
				echo'</p></div>';
				$i=$i+1;
			}
	}
?>
			
			
		</div>	
	</div>

</body>
</html>