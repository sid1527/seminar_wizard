<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'seminar_wizard';
	$indexno = $_GET['indexno'];
	echo $indexno;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	if(!$conn)
	{
	die('connection not formed'.mysqli_error());
	}
	echo 'connected successfully<br>';
	$sql="SELECT * FROM seminar_details where college_id='$indexno'";
	$retval=mysqli_query($conn,$sql);
?>
	<table>
	<tr>
	<th>NAME</th>
	<th>ID</th>
	<th>Speaker ID</th>
	<th>College ID</th>
	<th>Subject</th>
	<th>Cost</th>
	</tr>
	
<?php
	if(mysqli_num_rows($retval) > 0)
	{
	while($row = mysqli_fetch_assoc($retval))
	{
?>
	<tr><td>
<?php
	echo $row["seminar_name"];
?>
	</td>
	<td>
<?php
	echo $row["seminar_id"]."<br>";
?>
	</td>
	<td>
<?php
	echo $row["speaker_id"]."<br>";
?>
	</td>
	<td>
<?php
	echo $row["college_id"]."<br>";
?>
	</td>
	<td>
<?php
	echo $row["seminar_subject"];
?>
	</td><td>
<?php
	echo $row["cost"];
?>
	</td>
	</tr>
<?php
	}
	}
	else{
	echo "0 results";
	}
	mysqli_close($conn);
?>
</table>
