<?php
$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
$str = NULL;
	$query = mysql_query( "SELECT rollno,aggregate FROM student_info ORDER By aggregate" );
	$str .= '[';
	while( $row = mysql_fetch_array($query) )
	{ 
		$str .= '{';
		$str .=  '"rollno" : "'.$row['rollno'].' ",';
		$str .=  '"aggregate" : '.$row['aggregate'].' ';
		$str .= '},';
	}
	$str=substr($str, 0, -1);
	$str .= ']';
	
	echo $str;
	if($fp = fopen('data.json', 'w+'))
	{
		echo 0;
	}
	else
	{
		echo 1;
	}
	fwrite($fp, $str);
	fclose($fp);

?>
