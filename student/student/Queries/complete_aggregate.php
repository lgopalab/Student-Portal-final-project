<?php
$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
$one_one_marks = NULL;
$one_one_percent = NULL;
$one_two_marks = NULL;
$one_two_percent = NULL;
$two_one_marks = NULL;
$two_one_percent = NULL;
$two_two_marks = NULL;
$two_two_percent = NULL;
$three_one_marks = NULL;
$three_one_percent = NULL;
$three_two_marks = NULL;
$three_two_percent = NULL;
$four_one_marks = NULL;
$four_one_percent = NULL;
$four_two_marks = NULL;
$four_two_percent = NULL;
$query = mysql_query( "SELECT rollno FROM student_info" );
while( $row = mysql_fetch_array($query) )
	{ 	$name = NULL;
		$rollno = NULL;
		$rollno .= $row['rollno'];
		$name .= $row['rollno'];
		$name .= "_details";
		/*computing One_one percentage */
		$one_one = mysql_query( "SELECT * FROM $name where semester = 'one_one' " );
		while( $inside_row = mysql_fetch_array($one_one) )
		{
			$one_one_marks += $inside_row['marks'];	
				
		}
		$one_one_percent = $one_one_marks/10;
		mysql_query( "UPDATE student_info SET one_one = '$one_one_percent' WHERE rollno = '$rollno'" );
		$one_one_marks = 0;
		$one_one_percent = 0;
		
		/*computing One_two percentage */
		$one_two = mysql_query( "SELECT * FROM $name where semester = 'one_two' " );
		while( $inside_row = mysql_fetch_array($one_two) )
		{
			$one_two_marks += $inside_row['marks'];	
				
		}
		$one_two_percent = $one_two_marks/10;
		mysql_query( "UPDATE student_info SET one_two = '$one_two_percent' WHERE rollno = '$rollno'" );
		$one_two_marks = 0;
		$one_two_percent = 0;
		
		/*computing two_one percentage */
		$two_one = mysql_query( "SELECT * FROM $name where semester = 'two_one' " );
		while( $inside_row = mysql_fetch_array($two_one) )
		{
			$two_one_marks += $inside_row['marks'];	
				
		}
		$two_one_percent = $two_one_marks/7.5;
		mysql_query( "UPDATE student_info SET two_one = '$two_one_percent' WHERE rollno = '$rollno'" );
		$two_one_marks = 0;
		$two_one_percent = 0;
		
		/*computing two_two percentage */
		$two_two = mysql_query( "SELECT * FROM $name where semester = 'two_two' " );
		while( $inside_row = mysql_fetch_array($two_two) )
		{
			$two_two_marks += $inside_row['marks'];	
				
		}
		$two_two_percent = $two_two_marks/7.5;
		mysql_query( "UPDATE student_info SET two_two = '$two_two_percent' WHERE rollno = '$rollno'" );
		$two_two_marks = 0;
		$two_two_percent = 0;
		
		/*computing three_one percentage */
		$three_one = mysql_query( "SELECT * FROM $name where semester = 'three_one' " );
		while( $inside_row = mysql_fetch_array($three_one) )
		{
			$three_one_marks += $inside_row['marks'];	
				
		}
		$three_one_percent = $three_one_marks/7.5;
		mysql_query( "UPDATE student_info SET three_one = '$three_one_percent' WHERE rollno = '$rollno'" );
		$three_one_marks = 0;
		$three_one_percent = 0;
		
		/*computing three_two percentage */
		$three_two = mysql_query( "SELECT * FROM $name where semester = 'three_two' " );
		while( $inside_row = mysql_fetch_array($three_two) )
		{
			$three_two_marks += $inside_row['marks'];	
				
		}
		$three_two_percent = $three_two_marks/7.5;
		mysql_query( "UPDATE student_info SET three_two = '$three_two_percent' WHERE rollno = '$rollno'" );
		$three_two_marks = 0;
		$three_two_percent = 0;
		
		/*computing four_one percentage */
		$four_one = mysql_query( "SELECT * FROM $name where semester = 'four_one' " );
		while( $inside_row = mysql_fetch_array($four_one) )
		{
			$four_one_marks += $inside_row['marks'];	
				
		}
		$four_one_percent = $four_one_marks/7.5;
		mysql_query( "UPDATE student_info SET four_one = '$four_one_percent' WHERE rollno = '$rollno'" );
		$four_one_marks = 0;
		$four_one_percent = 0;
		
		/*computing four_two percentage */
		$four_two = mysql_query( "SELECT * FROM $name where semester = 'four_two' " );
		while( $inside_row = mysql_fetch_array($four_one) )
		{
			$four_two_marks += $inside_row['marks'];	
				
		}
		$four_two_percent = $four_two_marks/7;
		mysql_query( "UPDATE student_info SET four_two = '$four_two_percent' WHERE rollno = '$rollno'" );
		$four_wo_marks = 0;
		$four_two_percent = 0;
		
	}
	
	
/* Overall Aggregate Calculation */
$aggregate = mysql_query( "SELECT * FROM student_info" );
$x = NULL;
$y = NULL;
while( $row = mysql_fetch_array($aggregate) )
	{ 
		if($row['one_one'])
		{
			if($row['one_two'])
			{
				$y=($row['one_one']+$row['one_two'])/2;
				$x=($x+$y)/2;
			}
			else
			{
				$y=$row['one_one'];
				$x=($x+$y)/2;	
			}
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