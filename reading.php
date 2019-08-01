<?php 
session_start(); ?>
<html>
<head>
	<title>OnlineBlogger</title>
	<link rel="stylesheet" type="text/css" href="styles/design.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			font: 1em/1.5em "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
			color: #222;
			background-color: #eaeaea;
		}
		div.container{
			width: 100%;
			height: 100px;
			margin: 1em auto;
			margin-top: 50px;
		}
		#comment a{
			color: #fff;
			margin-left: 15px;
		}
		ul, li{
			list-style: none;
		}
		em{
			font-size: 0.75em;
		}
		ul.simple-nested li{
			margin-left: 3em;
		}
		div.comment{
			background: #fff;
			border: 1px solid #999;
			padding: 1em;
			margin-bottom: 1em;
			box-shadow:0 1px 1px black;

		}
		ul.simple-nested li ul{
			border-left: 1px solid #fff;
			position: relative;
		}
		ul.simple-nested li ul::before{
			content: '';
			border-bottom: 1px solid #fff;
			position: absolute;
			width: 2em;
			top: 1em;
		}
		div#box .box-panel{
			border-bottom: 2px solid #000;
			padding: 10px;
			height: 250px;
			background-color: #fff;
			overflow: auto;
			text-align: justify;
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
		div.task{
			width: 100%;
			height: 40px;
			background-color: #fff;
		}
		::-webkit-scrollbar-track {
			background-color: #f1f1f1;
		}
		::-webkit-scrollbar-thumb{
			background: #888;
		}
		::-webkit-scrollbar-thumb:hover{
			background: #555;
		}
	</style>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="profile.php">Online<span>Blogger</span></a></div>
		<div id="register"><a href="logout.php"><i class="fa fa-sign-out" style="margin-right:  10px; font-size: 1.5em;"></i><a href="logout.php">Log Out</a></div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<div id="user"><a href="profile.php" style="color: #fff;">Welcome :<?php echo $_SESSION['name'];?></a>
				<p style="color: #ffffcc;">(<?php echo $_SESSION['email_id']; ?>)</p></div>
				<li><a href="profile.php"><i class="fa fa-home" style="margin-right:  10px; font-size: 1.5em;"></i>Home</a></li>
				<li><a href="userprofile.php"><i class="fa fa-user-circle" style="margin-right:  10px; font-size: 1.5em;"></i>Profile</a></li>
				<li><a href="writeview.php"><i class="fa fa-pencil-square-o" style="margin-right:  10px; font-size: 1.5em;"></i>Write a Blog</a></li>
				<li><a href="myviews.php"><i class="fa fa-rss-square" style="margin-right:  10px; font-size: 1.5em;"></i>My Blog</a></li>
				<li><a href="about.php"><i class="fa fa-info-circle" style="margin-right:  10px; font-size: 1.5em;"></i>About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-address-book-o" style="margin-right:  10px; font-size: 1.5em;"></i>Contact Us</a></li>
			</ul>
		</div>
		<style>
				.comment{
					margin-top: 10px;
					border: 2px solid gray;
					font-family: arial;
					width: 100%;
				}
				.submit{
					width: 100px;
					float: right;
					margin-top: 10px;
					margin-bottom: 5px;
					text-align: center;
					background-color: #2980b9;
					color: #fff;
					box-shadow: 0 1px 1px #000;
				}
				.submit:hover{
					background: blue;
				}
			</style>
		<div class="content" style="overflow: auto;">
			<?php 
						if (base64_encode($_SESSION['dp'])==NULL)
						{
							echo'<img src="images/pic.png" width="50px" height="50px" style="float: right; cursor: pointer;">';
						}
					else
						echo'<img style="border-radius:50px; float: right; cursor: pointer; border:4px solid #2980b9;" src="data:image/jpeg;base64,'.base64_encode($_SESSION['dp']).'" height="50px" width="50px" class="img-thumnail"/> '; ?>	
			<h1><?php echo $_SESSION['name'];?></h1>
		
			<div id="box">
				 <?php 
					$conn=mysqli_connect("localhost","root","","obl");
					$id2=$_GET['id'];
					$id3=$id2;
					$result=mysqli_query($conn,"Select id,name,email,topic,content,date,up,down from view where id='$id2';");
					$row=mysqli_fetch_array($result);

					echo'<div class="box-top">';
					echo $row['name'];
					echo' | Topic : ';
					echo $row["topic"];
					echo' | Date : ';
					echo $row["date"];
					echo "</div>";
					echo '<div class="box-panel" style="margin-bottom:10px; font-size: 1.2em; " ><p>';	
					echo $row['content'];
					echo "</p>";
					echo "</div>";
					echo'<div class="task" style="margin-top:-10px; box-shadow:0 1px 1px black;">';
					echo '<p style="margin-left:10px;"> &nbsp;&nbsp;<a href="database/like.php?id='.urlencode($id3).'"><i class="fa fa-thumbs-o-up" style="font-size:26px; margin-top:5px;"></i></a>&nbsp;<span class="w3-badge" style="font-size:12px;">';
					echo $row['up'];
					echo'</span>';
					echo' &nbsp;&nbsp;&nbsp;&nbsp;'; 
					echo'<a href="database/unlike.php?id='.urlencode($id3).'"><i class="fa fa-thumbs-o-down" style="font-size:26px;">&nbsp;</i></a><span class="w3-badge" style="font-size:12px;">';
					echo $row['down'];
					echo'</span>';
					echo '<a href="https://www.facebook.com"><i class="fa fa-facebook" style="float:right; font-size: 2em; color: #3B5998; margin-right: 20px; margin-top:10px; "></i></a>';
					echo '<a href="https://www.twitter.com"><i class="fa fa-twitter" style="float:right; font-size: 2em; color: #55ACEE; margin-right: 10px; margin-top:10px; "></i></a>';
					echo '<a href="https://www.instagram.com"><i class="fa fa-instagram" style="float:right; font-size: 2em; color: #DD2A7B; margin-right: 10px; margin-top:10px; "></i></a>';
					echo '<a href="https://www.whatsapp.com"><i class="fa fa-whatsapp" style="float:right; font-size: 2em; color: #25D366; margin-right: 10px; margin-top:10px; "></i></a>';
					echo '<a href="https://www.skype.com"><i class="fa fa-skype" style="float:right; font-size: 2em; color:#00aff0 ; margin-right: 10px; margin-top:10px; "></i></a>';
					
					echo'</div>';
					echo "<form action='database/comment.php?id=".urlencode($id3)."' method='post'>";
				    echo'<textarea rows="6" cols="100" name="comment" placeholder="Comment Here...."  class="comment" style="resize: none; padding: 5px;"></textarea>';
					echo'<button class="submit" >Submit</button>';
					echo "</form>";
					
					$result=mysqli_query($conn,"Select id,pid,name,content,date,email from comment where pid='$id2';");
					while($row=mysqli_fetch_array($result))
					{
					echo'<div class="container">';
					echo'<ul class="simple-nested">';
					echo'<li>';
					echo'<div class="comment">';
					echo'<p>';
					echo $row['name'];
					echo " (";
					echo $row['email'];
					echo ") ";
					echo'</p>';
					echo'<em>';
					echo $row['date'];
					echo'</em>';
					echo'<p>';
					echo $row['content'];
					echo'</p>';
					echo"</div></li></ul></div>";
			}
			?>
		</div>
		</div>
</body>
</html>
