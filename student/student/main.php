<!DOCTYPE html>
<?php
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
			<li class="sel"><a href="main.php">Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="compare.php">Compare</a></li>
			<li><a href="position.php">Position In Class</a></li>
			<li><a href="timetable.php">TimeTable</a></li>
			<li><a href="#">Extra-1</a></li>
			<li><a href="#">Extra-2</a></li>
		</ul>
	</nav>
	
	<div id="content" class="clearfix">
		<section id="center">
			<div id="userStats" class="clearfix">
				<div class="pic">
					<a href="#"><img src="img/user_avatar.jpg" width="150" height="150" /></a>
				</div>
				
				<div class="data">
					<h1><center><?php echo $name;?></center></h1>
					<h3><center><?php if($branch=="cse")
										echo "Department of Computer Science and Engineering";
										else if($branch=="ece")
										echo "Department of Electronics and  Communication Engineering"	?></center></h3>
					
					<div class="sep"></div>
					<center>
					<ul class="numbers clearfix">
						<li>Year<strong><?php echo $year;?></strong></li>
						<li>Semester<strong><?php echo $semester;?></strong></li>
					</ul>
					</center>
				</div>
			</div>
			
			
			
		</section>
	</div>
</body>
</html>