<!DOCTYPE html>
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
			<li><a href="profile.php">Profile</a></li>
			<li class="sel"><a href="compare.php">Compare</a></li>
			
			<!--li><a href="timetable.php">TimeTable</a></li>-->
			<li><a href="#">Extra-1</a></li>
			<li><a href="#">Extra-2</a></li>
		</ul>
	</nav>
	
	<div id="content" class="clearfix">
		<section id="center">
						
			
			<object data="compare/iframe.php" height=800 width=900 ></object>
		</section>
	</div>
</body>
</html>