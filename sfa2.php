<?php

define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DATABASE', 'radhika');
   $db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $class = mysqli_real_escape_string($db,$_POST['class']);
      $dept = mysqli_real_escape_string($db,$_POST['dept']);
      $roll = mysqli_real_escape_string($db,$_POST['roll']);
      $sql = "SELECT * FROM dbit3 WHERE syear = '$class' and sdept = '$dept' and roll_no='$roll' " ;//group by rollno
      $result = mysqli_query($db,$sql);      

      
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count >= 1) 
      {
      	echo"<table rules=all border=solid>";
        echo"<tr >";
		echo"<th>Name</th>";
		echo"<th>Project Title</th>";
		echo"</tr><br>";
		while($student=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td><b>".$student['sname']."</b></td>";
			echo "<td>".$student['proj_title']."</td>";
			echo "</tr><br>";
		}
		echo"</table>";
		exit;
	  }
      else 
      {
         echo $error="Data not available";
      }
   }

?>