<?php

define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DATABASE', 'radhika');
   $db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $faculty = mysqli_real_escape_string($db,$_POST['faculty']);
      $dept = mysqli_real_escape_string($db,$_POST['dept']);
      $sql = "SELECT * FROM dbit1 WHERE faculty = '$faculty' and dept = '$dept' " ;//group by rollno
      $result = mysqli_query($db,$sql);      

      
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count >= 1) 
      {
      	echo"<table rules=all border=solid>";
        echo"<tr >";
		echo"<th>Project Title</th>";
		echo"</tr><br>";
		while($student=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
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