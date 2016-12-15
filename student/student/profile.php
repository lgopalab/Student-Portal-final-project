<!DOCTYPE html>
<?php
$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
session_start();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="global.css" />
</head>

<body>	
	<header>
		<div class="wrapper">
			<a href="#"><img src="img/Logo.jpg" alt="infoplace logo" title="Get the INFO here" /></a>
			
			<span id="usernav"><a href="logout.php">Logout</a> - <a href="profile.php">My Profile<span></span></a></span>
		</div>
	</header>
	
	<nav>
		<ul id="n" class="clearfix">
			<li><a href="main.php">Home</a></li>
			<li  class="sel"><a href="profile.php">Profile</a></li>
			<li><a href="compare.php">Compare</a></li>
			<li><a href="position.php">Position In Class</a></li>
			<li><a href="timetable.php">TimeTable</a></li>
			<li><a href="#">Extra-1</a></li>
			<li><a href="#">Extra-2</a></li>
		</ul>
	</nav>
	
	<div id="content" class="clearfix">
		<section id="center">
						
			
			<object data="profile/bars.php" height=800 width=1100 ></object>
			<object data="profile/tables.php" height=800 width=1000 ></object>
		

		</section>
	</div>
	
</body>
</html>