<?php
	  $num=rand(0001,9999);
	echo "<h1>booking id is $num</h1>";	
         
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "seminar_wizard";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
			if(isset($_POST["submit"])){
			$a=$_POST['name'];
			$b=$_POST['gender'];
			$c=$_POST['email'];
			$d=$_POST['seminarid'];
			$sql = "INSERT INTO people_taking_part (name,gender,email_id,seminar_id,booking_id) VALUES ('$a','$b','$c','$d','$num');";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
			$sql1="SELECT cost FROM seminar_details WHERE seminar_id = '$d';"; 
			}
			$conn->close();
            
      ?>
	  <button type="button"><a href="aa.php">BACK HOME</a></button>










<!--
<html>
   <head>
      <title>Add New Record in MySQLi Database</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">
   </head>
   
   <body>
         <form action = "fetch.php" method = "post">
            <label>Name :</label>
            <input type = "text" name = "name" id = "name">
            <br>
            <label>Gender :</label>
            <input type = "text" name = "gender" id = "gender">
            <br>
            <label>email :</label>
            <input type = "text" name = "email" id = "email">
            <br>
            <label>seminar :</label>
            <input type = "text" name = "seminar" id = "seminar">
            <br>
            <label>phone :</label>
            <input type = "text" name = "phone" id = "phone">
            <br>
            <!--<label>amount :</label>
            <input type = "text" name = "name" id = "name" />
            <br />
            <br>
            <input type = "submit" value ="submit" name = "submit">
            <br>
         </form>
      </body>
</html>-->