<?php
$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
$query = mysql_query( "SELECT * FROM student_info" );
$str = NULL;

while( $row = mysql_fetch_array($query) )
	{ 	$one_one = NULL;
		$one_two = NULL;
		$two_one = NULL;
		$two_two = NULL;
		$three_one = NULL;
		$three_two = NULL;
		$four_one = NULL;
		$four_two = NULL;
		
		$name = NULL;
		$rollno = NULL;
		$rollno .= $row['rollno'];
		$name .= $row['rollno'];
		$name .= "_details";
		
		$str .= "[";
		
		/*computing One_one marks */
		$one_one = mysql_query( "SELECT * FROM $name where semester = 'one_one' " );
		if($one_one)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "1-1", "percent" : '.$row['one_one'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($one_one) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
					
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];
					
			}
			$str.= 'Total : '.$total.',';
			$str.= 'Backlogs : '.$i;		
			$str .= '"},';
		}
		
		
		/*computing One_two marks */
		$one_two = mysql_query( "SELECT * FROM $name where semester = 'one_two' " );
		if($one_two)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "1-2", "percent" : '.$row['one_two'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($one_two) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
					
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];
					
			}
			$str.= 'Total : '.$total.',';
			$str.= 'Backlogs : '.$i;		
			$str .= '"},';
		}
		
		
		/*computing two_one marks */
		$two_one = mysql_query( "SELECT * FROM $name where semester = 'two_one' " );
		if($two_one)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "2-1", "percent" : '.$row['two_one'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($two_one) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];	
			}
			$str.= 'Total : '.$total.',';
			$str.= 'Backlogs : '.$i;
			$str .= '"},';
		}	
		
		/*computing two_two marks */
		$two_two = mysql_query( "SELECT * FROM $name where semester = 'two_two' " );
		if($two_two)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "2-2", "percent" : '.$row['two_two'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($two_two) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];	
			}
			$str.= 'Total : '.$total.',';
			$str.= 'Backlogs : '.$i;
			$str .= '"},';
		}
		/*computing three_one marks */
		$three_one = mysql_query( "SELECT * FROM $name where semester = 'three_one' " );
		if($three_one)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "3-1", "percent" : '.$row['three_one'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($three_one) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];	
			}
			$str.= 'Total : '.$total.',';
			$str.= 'Backlogs : '.$i;
			$str .= '"},';
		}
		
		/*computing three_two marks */
		$three_two = mysql_query( "SELECT * FROM $name where semester = 'three_two' " );
		if($three_two)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "3-2", "percent" : '.$row['three_two'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($three_two) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];	
			}
			$str.= 'Total : '.$total.',';
			$str.= 'Backlogs : '.$i;
			$str .= '"},';
		}
		/*computing four_one marks */
		$four_one = mysql_query( "SELECT * FROM $name where semester = 'four_one' " );
		if($four_one)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "4-1", "percent" : '.$row['four_one'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($four_one) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];	
			}
			$str.= 'Total : '.$total.',';
			$str.= 'Backlogs : '.$i;
			$str .= '"},';
		}
		/*computing four_two marks */
		$four_two = mysql_query( "SELECT * FROM $name where semester = 'four_two' " );
		if($four_two)
		{	$i=0;
			$total=0;
			$str .='{';
			$str .= '"semester" : "4-2", "percent" : '.$row['four_two'].', "marks" : " ';
			while( $inside_row = mysql_fetch_array($four_two) )
			{	
				if($inside_row['internal']<14||$inside_row['external']<26)
				{	
					$i++;
				}
				$str .= $inside_row['subject']. ' : ' 	.$inside_row['internal'].':'.$inside_row['external'].',' 	;	
				$total+=$inside_row['internal']+$inside_row['external'];	
			}
			$str.= 'Total : '.$total.',';	
			$str.= 'Backlogs : '.$i;
			$str .= '"},';
		}
		$str=substr($str, 0, -1);
		$str .= ']';
		
		$json = NULL;
		$json = $rollno;
		$json .= ".json";
		
	if($fp = fopen("data/$json", 'w+'))
	{
		echo 0;
	}
	else
	{
		echo 1;
	}
	fwrite($fp, $str);
	fclose($fp);
	$str = NULL;	
	}
		
		
?>		