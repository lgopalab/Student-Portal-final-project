<!DOCTYPE html>
<html>
<?php
$connect = mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
$query = mysql_query( "SELECT * FROM student_info" );
$x = NULL;
$y = NULL;
while( $row = mysql_fetch_array($query) )
	{ 
		if($row['one_one'])
		{
			$x=$row['one_one'];
		}
		if($row['two_one'])
		{
			if($row['two_two'])
			{
				$y=($row['two_one']+$row['two_two'])/2;
				$x=($x+$y)/2;
			}
			else
			{
				$y=$row['two_one'];
				$x=($x+$y)/2;
			}
		}
		if($row['three_one'])
		{
			if($row['three_two'])
			{
				$y=($row['three_one']+$row['three_two'])/2;
				$x=($x+$y)/2;
			}
			else
			{
				$y=$row['three_one'];
				$x=($x+$y)/2;
			}
		}	
		if($row['four_one'])
		{
			if($row['four_two'])
			{
				$y=($row['four_one']+$row['four_two'])/2;
				$x=($x+$y)/2;
			}
			else
			{
				$y=$row['four_one'];
				$x=($x+$y)/2;
			}
		}
		$rollno = $row['rollno'];
		mysql_query( "UPDATE student_info SET AGGREGATE = '$x' WHERE rollno = '$rollno'" );
		
	}
	
?>