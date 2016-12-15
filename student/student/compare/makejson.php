<?php

session_start();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];


$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
$one_one=array();
$one_two=array();
$two_one=array();
$two_two=array();
$three_one=array();
$three_two=array();
$four_one=array();
$four_two=array();


$i = 0;
foreach($_POST['select'] as $rollno) 
	{	$i++;
		//for one_one array
		$query11 = mysql_query( "SELECT one_one FROM student_info WHERE rollno = '$rollno' " );
		$row11 = mysql_fetch_array($query11);
		$one_one_index = $i;
		$one_one += array($one_one_index=>$row11['one_one']);
		
		//for one_two array
		$query12 = mysql_query( "SELECT one_two FROM student_info WHERE rollno = '$rollno' " );
		$row12 = mysql_fetch_array($query12);
		$one_two_index = $i;
		$one_two += array($one_two_index=>$row12['one_two']);
		
		//for two_one array
		$query21 = mysql_query( "SELECT two_one FROM student_info WHERE rollno = '$rollno' " );
		$row21 = mysql_fetch_array($query21);
		$two_one_index = $i;
		$two_one += array($two_one_index=>$row21['two_one']);
		
		//for two_two array
		$query22 = mysql_query( "SELECT two_two FROM student_info WHERE rollno = '$rollno' " );
		$row22 = mysql_fetch_array($query22);
		$two_two_index = $i;
		$two_two += array($two_two_index=>$row22['two_two']);
		
		//for three_one array
		$query31 = mysql_query( "SELECT three_one FROM student_info WHERE rollno = '$rollno' " );
		$row31 = mysql_fetch_array($query31);
		$three_one_index = $i;
		$three_one += array($three_one_index=>$row31['three_one']);
		
		//for three_two array
		$query32 = mysql_query( "SELECT three_two FROM student_info WHERE rollno = '$rollno' " );
		$row32 = mysql_fetch_array($query32);
		$three_two_index = $i;
		$three_two += array($three_two_index=>$row32['three_two']);
		
		//for four_one array
		$query41 = mysql_query( "SELECT four_one FROM student_info WHERE rollno = '$rollno' " );
		$row41 = mysql_fetch_array($query41);
		$four_one_index = $i;
		$four_one += array($four_one_index=>$row41['four_one']);
		
		//for four_two array
		$query42 = mysql_query( "SELECT four_two FROM student_info WHERE rollno = '$rollno' " );
		$row42 = mysql_fetch_array($query42);
		$four_two_index = $i;
		$four_two += array($four_two_index=>$row42['four_two']);
		
	}	
arsort($one_one);	
arsort($one_two);	
arsort($two_one);		
arsort($two_two);
arsort($three_one);		
arsort($three_two);
arsort($four_one);		
arsort($four_two);		

$j=0;

$str = NULL;
$str .= '[';

if(!empty($_POST['select'])) 
{
    foreach($_POST['select'] as $rollno) 
	{	$j++;
		$query = mysql_query( "SELECT * FROM student_info WHERE rollno = '$rollno' " );
		$row = mysql_fetch_array($query);
		$str .= '{';
		$str .= '"name" : "'.$row['name'].' ",';
		$str .= '"children" : [';
		if($row['one_one'])
		{	$key = array_search($j, array_keys($one_one))+1;
			$str .= '{"level" : "1-1", "percent" :  '.$row['one_one'].',"position" : "'.$key.'"},';
		}	
		if($row['one_two'])
		{	$key = array_search($j, array_keys($one_two))+1;
			$str .= '{"level" : "1-2", "percent" :  '.$row['one_two'].',"position" : "'.$key.'"},';
		}	
		if($row['two_one'])
		{	$key = array_search($j, array_keys($two_one))+1;
			$str .= '{"level" : "2-1", "percent" :  '.$row['two_one'].',"position" : "'.$key.'"},';	
		}	
		if($row['two_two'])
		{	$key = array_search($j, array_keys($two_two))+1;
			$str .= '{"level" : "2-2", "percent" :  '.$row['two_two'].',"position" : "'.$key.'"},';	
		}	
		if($row['three_one'])
		{	$key = array_search($j, array_keys($three_one))+1;
			$str .= '{"level" : "3-1", "percent" :  '.$row['three_one'].',"position" : "'.$key.'"},';
		}	
		if($row['three_two'])
		{	$key = array_search($j, array_keys($three_two))+1;
			$str .= '{"level" : "3-2", "percent" :  '.$row['three_two'].',"position" : "'.$key.'"},';		
		}	
		if($row['four_one'])
		{	$key = array_search($j, array_keys($four_one))+1;
			$str .= '{"level" : "4-1", "percent" :  '.$row['four_one'].',"position" : "'.$key.'"},';	
		}	
		if($row['four_two'])
		{	$key = array_search($j, array_keys($four_two))+1;
			$str .= '{"level" : "4-2", "percent" :  '.$row['four_two'].',"position" : "'.$key.'"},';	
		}	
		$str=substr($str, 0, -1);
		$str .= ']},';
	}
	$str=substr($str, 0, -1);
	$str .= ']';
	echo $str;
	
}	
	$filename = NULL;
	$filename = 'data/'.$_SESSION['rollno'].'.json';
	if($fp = fopen($filename, 'w+'))
	{
		echo 0;
	}
	else
	{
		echo 1;
	}
	fwrite($fp, $str);
	fclose($fp);
    header('Location:graph.php');
 
?>