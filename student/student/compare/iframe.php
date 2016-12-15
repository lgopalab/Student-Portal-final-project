<!DOCTYPE html>
<?php
session_start();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];

?>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
$query = mysql_query( "SELECT * FROM student_info WHERE branch = 'cse'" );
?>
<body align="center">
<p><b>Select 5 Members</b></p>
<form name="input" action="makejson.php" method="POST">
<?php
printf('<table>');
while( $row = mysql_fetch_array($query) )
	{ 	
		printf('<tr><td><input type="checkbox" name="select[]" class="select" value="%s" onclick="check()" /></td><td>%s</td><td>%s</td></tr>', $row['rollno'],$row['name'], $row['rollno']);
	}
?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
var i=0;
function check()
{	var elements=document.getElementsByClassName("select");
	i=0;
	for(var j=0; j<elements.length; j++) 
		{
			if(elements[j].checked == true)
			{	
				i++;
			
			}
		}
	
	
	if(i>5)
	{	alert("Cannot select more than 5 members.");
		var elements=document.getElementsByClassName("select");
		for(var j=0; j<elements.length; j++) 
		{
			elements[j].checked = false;
		}
	}	
}
</script>
<body>
</table>
<table>
<tr><td><input type="submit" value="Submit"></td></tr>
</table>
</form> 



</body>
</html>