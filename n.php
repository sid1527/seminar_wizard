  <?php
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
$sql = "SELECT * FROM college";
$result = $conn->query($sql);
?>
<table>
<tr>
<th>College ID</th>
<th>College Name</th>
<th>District</th>
</tr>
<?php
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $indexno=$row["college_id"];
        echo '<tr><td>'.$row["college_id"].'</td><td><a href="song.php?indexno='.$indexno.'">'.$row["college_name"].'</a>'.'</td><td>'.$row["district"].'</td></tr>';   
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>