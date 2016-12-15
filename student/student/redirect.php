<?php
$connect = @mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'portal' );
session_start();
ob_start();

	
	if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password']))
	{	
		$rollno=$_POST['username'];
		$password=$_POST['password'];
		$table_name='student_info';
		$query1="SELECT rollno FROM $table_name WHERE DOB='$password' AND rollno ='$rollno'";
		$mysql_run1= mysql_query($query1);
		$mysql_num_row= mysql_num_rows($mysql_run1);
		if($mysql_num_row==1)
		{	
			$query2="SELECT name,rollno,branch,year,semester FROM student_info WHERE rollno ='$rollno'";
			$mysql_run2= mysql_query($query2);
			 $name=mysql_result($mysql_run2,0,'name');
			 $rollno=mysql_result($mysql_run2,0,'rollno');
			 $branch=mysql_result($mysql_run2,0,'branch');
			 $year=mysql_result($mysql_run2,0,'year');
			 $semester=mysql_result($mysql_run2,0,'semester');
			 $_SESSION['name']=$name;
			 $_SESSION['rollno']=$rollno;
			 $_SESSION['branch']=$branch;
			 $_SESSION['year']=$year;
			 $_SESSION['semester']=$semester;
			 echo $_SESSION['name'];
			 header('Location:main.php');
		}
		else
		{
			header('Location:../index.php');
		}
	}
	
	
	
?>
