<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seminar_wizard";
$indexno = $_GET['indexno'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM seminar_details WHERE college_id= '$indexno'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
            echo '<h1><div class="row alert alert-success"><strong><center>
                  <div class="col-md-4">Name: ' .$row["seminar_name"] .'</div>
                  <div class="col-md-4"> Id: '.$row["seminar_id"].'</div>
                  <div class="col-md-4"> SpeakerId: '.$row["speaker_id"].'</div>
                  <div class="col-md-4"> Seminar Topic: '.$row["seminar_subject"].'</div>
                  <div class="col-md-4"> Cost: '.$row["cost"].'</div></center></strong>
                  </div></h1>';
            }
} else {
    echo "0 results";
}
$conn->close();
?>
<button type="button"><a href="aa.php">BACK HOME</a></button>
