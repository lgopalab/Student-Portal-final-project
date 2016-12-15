<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php 
$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
session_start();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];

$table = NULL;
$table .= $rollno.'_details';
$one_one = mysql_query("SELECT * FROM $table WHERE semester = 'one_one'");
if(mysql_num_rows($one_one)!=0)
{	echo "<center>Year-1</center>";
	echo '<table><th>Subject</th><th>Internal</th><th>External</th><th>Total</th>';
	while( $row = mysql_fetch_array($one_one) )
	{ 
		echo '<tr><td>'.$row['subject'].'</td><td>'.$row['internal'].'</td><td>'.$row['external'].'</td><td>'.$row['marks'].'</td></tr>';

	}
	echo '</table>';
}

$two_one = mysql_query("SELECT * FROM $table WHERE semester = 'two_one'");
if(mysql_num_rows($two_one)!=0)
{	echo "<center>Year-2 Semester-1</center>";
	echo '<table><th>Subject</th><th>Internal</th><th>External</th><th>Total</th>';
	while( $row = mysql_fetch_array($two_one) )
	{ 
		echo '<tr><td>'.$row['subject'].'</td><td>'.$row['internal'].'</td><td>'.$row['external'].'</td><td>'.$row['marks'].'</td></tr>';

	}
	echo '</table>';
}

$two_two = mysql_query("SELECT * FROM $table WHERE semester = 'two_two'");
if(mysql_num_rows($two_two)!=0)
{	echo "<center>Year-2 Semester-2</center>";
	echo '<table><th>Subject</th><th>Internal</th><th>External</th><th>Total</th>';
	while( $row = mysql_fetch_array($two_two) )
	{ 
		echo '<tr><td>'.$row['subject'].'</td><td>'.$row['internal'].'</td><td>'.$row['external'].'</td><td>'.$row['marks'].'</td></tr>';

	}
	echo '</table>';
}

$three_one = mysql_query("SELECT * FROM $table WHERE semester = 'three_one'");
if(mysql_num_rows($three_one)!=0)
{	echo "<center>Year-3 Semester-1</center>";
	echo '<table><th>Subject</th><th>Internal</th><th>External</th><th>Total</th>';
	while( $row = mysql_fetch_array($three_one) )
	{ 
		echo '<tr><td>'.$row['subject'].'</td><td>'.$row['internal'].'</td><td>'.$row['external'].'</td><td>'.$row['marks'].'</td></tr>';

	}
	echo '</table>';
}

$three_two = mysql_query("SELECT * FROM $table WHERE semester = 'three_two'");
if(mysql_num_rows($three_two)!=0)
{	echo "<center>Year-3 Semester-2</center>";
	echo '<table><th>Subject</th><th>Internal</th><th>External</th><th>Total</th>';
	while( $row = mysql_fetch_array($three_two) )
	{ 
		echo '<tr><td>'.$row['subject'].'</td><td>'.$row['internal'].'</td><td>'.$row['external'].'</td><td>'.$row['marks'].'</td></tr>';

	}
	echo '</table>';
}

$four_one = mysql_query("SELECT * FROM $table WHERE semester = 'four_one'");
if(mysql_num_rows($four_one)!=0)
{	echo "<center>Year-4 Semester-1</center>";
	echo '<table><th>Subject</th><th>Internal</th><th>External</th><th>Total</th>';
	while( $row = mysql_fetch_array($four_one) )
	{ 
		echo '<tr><td>'.$row['subject'].'</td><td>'.$row['internal'].'</td><td>'.$row['external'].'</td><td>'.$row['marks'].'</td></tr>';

	}
	echo '</table>';
}

$four_two = mysql_query("SELECT * FROM $table WHERE semester = 'four_two'");
if(mysql_num_rows($four_two)!=0)
{	echo "<center>Year-4 Semester-2</center>";
	echo '<table><th>Subject</th><th>Internal</th><th>External</th><th>Total</th>';
	while( $row = mysql_fetch_array($four_two) )
	{ 
		echo '<tr><td>'.$row['subject'].'</td><td>'.$row['internal'].'</td><td>'.$row['external'].'</td><td>'.$row['marks'].'</td></tr>';

	}
	echo '</table>';
}
?>	
</html>