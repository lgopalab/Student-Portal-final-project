<?php
$connect = mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
$str = NULL;
	$query = mysql_query( "SELECT * FROM cse_timetable" );
	$str .= '[';
	while( $row = mysql_fetch_array($query) )
	{ 
		$str .= '{';
		$str .=  '"day" : "'.$row['day'].'",';
		$str .=  '"from" : "'.$row['from'].'",';
		$str .=  '"to" : "'.$row['to'].'",';
		$str .=  '"subject" : "'.$row['subject'].'"';
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
