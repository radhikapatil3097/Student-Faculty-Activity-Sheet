<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="radhika";

$con=mysqli_connect("$hostname","$username","$password","$dbname");

if(!$con)
{
	echo"unable to connect to database";
}
else
{
	echo"connnection established" ;
}

//$count=$_GET['count'];

$inst="INSERT INTO dbit1(dept,faculty,proj_title,proj_desc,adate,sdate) VALUES ('$_POST[dept]','$_POST[faculty]','$_POST[Project_Title]','$_POST[Project_Description]','$_POST[adate]','$_POST[sdate]')";



//$inst1="INSERT INTO dbit2(sname,sdept,syear,roll_no) VALUES ('$_POST[sname]','$_POST[dept1]','$_POST[year1]','$_POST[rollno]')";
$inst2="INSERT INTO dbit3(proj_title,sname,sdept,syear,roll_no) VALUES ('$_POST[Project_Title]','$_POST[sname]','$_POST[dept1]','$_POST[year1]','$_POST[rollno]')";


if(mysqli_query($con,$inst))
{
	echo"data inserted successfully";
}
else
{
	echo"problem inserting data";
}


/*if(mysqli_query($con,$inst1))
{
	echo"data inserted successfully";
}
else
{
	echo"problem inserting data";
}*/

if(mysqli_query($con,$inst2))
{
	echo"data inserted successfully";
}
else
{
	echo"problem inserting data";
}
mysqli_close($con);


?>
