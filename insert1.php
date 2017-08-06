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

$inst1="INSERT INTO dbit2(sname,sdept,syear,roll_no) VALUES ('$_POST[sname]','$_POST[dept1]','$_POST[year1]','$_POST[rollno]')";

if(mysqli_query($con,$inst1))
{
	echo"data inserted successfully";
}
else
{
	echo"problem inserting data";
}

mysqli_close($con);


?>
