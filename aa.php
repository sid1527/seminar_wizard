<!DOCTYPE HTML>
<html>
	<head>
		<title>SEMINAR WIZARD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body style="background-image:url('bg.png')">

		<!-- Wrapper -->
			<div id="wrapper" >


				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>

						<div class="content">
							<div class="inner">
								<h1>SEMINAR WIZARD</h1>
								<p>A fully responsive site designed for registering and attending <br />various different SEMINARS based
								on the location and the type of the seminar being conducted.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#college">College Details</a></li>
								<li><a href="#speaker">Speaker Details</a></li>
								<li><a href="#work">List of Seminars</a></li>
								<li><a href="#registration">Registration Form</a></li>
								<li><a href="login.html">All Registration</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Introduction</h2>
								<span class="image main"><img src="intro.jpg" alt="" /></span>
								<p>Here is a platform to know about various seminars conducted in different colleges of Karnataka</p>
								<p>You can book seats easily for any seminar that you wish to attend and you can get all sorts of information related to the seminar that is being conducted .Transaction of money for booking of seats is also made easy.</p>
							</article>
							
						<!-- Work -->
							<article id="college">
								<h2 class="major">COLLEGE DETAILS</h2>
								<span class="image main"><img src="col.jpg" alt="" /></span>
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
?>								</article>
			

			<!-- Work -->
							<article id="speaker">
								<h2 class="major">SPEAKER DETAILS</h2>
								<span class="image main"><img src="sp.jpg" alt="" /></span>
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'seminar_wizard';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	if(!$conn)
	{
	die('connection not formed'.mysqli_error());
	}
	echo 'connected successfully<br>';
	$sql='SELECT * FROM speaker_details';
	$retval=mysqli_query($conn,$sql);
?>
	<table>
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>EMAIL-ID</th>
	<th>QUALIFICATION</th>
	</tr>
	
<?php
	if(mysqli_num_rows($retval) > 0)
	{
	while($row = mysqli_fetch_assoc($retval))
	{
?>
	<tr><td>
<?php
	echo $row["speaker_id"];
?>
	</td>
	<td>
<?php
	echo $row["speaker_name"];
?>
	</td>
	<td>
<?php
	echo $row["email_id"];
?>
	</td>
	
	<td>
<?php
	echo $row["qualification"];
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
								</article>
						
						<!-- Work -->
							<article id="work">
								<h2 class="major">LIST OF SEMINARS</h2>
								<span class="image main"><img src="work.jpg" alt="" /></span>
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'seminar_wizard';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	if(!$conn)
	{
	die('connection not formed'.mysqli_error());
	}
	echo 'connected successfully<br>';
	$sql='SELECT * FROM seminar_details';
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
								</article>

						<!-- About -->
							<article id="registration">
								<h2 class="major">Registration Form</h2>
								<form action="fetch.php" method="post">
									Seminar Id:<br>
									<select name="seminarid">
                                    <option value="31058">31058</option>
									<option value="31123">31123</option>
									<option value="31217">31217</option>
									<option value="31235">31235</option>
                                    <option value="31436">31436</option>
									<option value="31946">31946</option>
									<option value="31983">31983</option>
									<option value="32315">32315</option>
                                    <option value="32345">32345</option>
									<option value="32971">32971</option>
									<option value="33712">33712</option>
									<option value="33762">33762</option>
                                    <option value="35648">35648</option>
									<option value="36541">36541</option>
									<option value="36721">36721</option>
									<option value="39834">39834</option>
									
									</select><br>
									Name:<input type="text" name="name"><br>
									Email:<input type="email" name="email"><br>
									Phone no:<input type="text" name="number"><br>
									Gender:<br>
									<select name="gender">
                                    <option value="male">Male</option>
									<option value="female">Female</option>
									<option value="others">Others</option>
									
									</select>
									<input type="submit" name="submit" value="submit">
								</form>
								<p>Fill the complete form and click on the SUBMIT button to add data to the database.</p>
							</article>

						<!-- ALl Registration -->
							<article id="ar">
								<h2 class="major">All Registrations</h2>
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'seminar_wizard';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	if(!$conn)
	{
	die('connection not formed'.mysqli_error());
	}
	echo 'connected successfully<br>';
	$sql='SELECT * FROM people_taking_part';
	$retval=mysqli_query($conn,$sql);
?>
	<table>
	<tr><th>BOOKING ID</th>
	
	<th>NAME</th>
	<th>GENDER</th>
	<th>EMAIL ID</th>
	<th>SEMINAR ID</th>
	<th>AMOUNT</th>
	</tr>
	
<?php
	if(mysqli_num_rows($retval) > 0)
	{
	while($row = mysqli_fetch_assoc($retval))
	{
?>
	<tr>
	<td>
<?php
	echo $row["booking_id"];
?>
	</td>
	<td>
<?php
	echo $row["name"];
?>
	</td>
	<td>
<?php
	echo $row["gender"];
?>
	</td>
	<td>
<?php
	echo $row["email_id"];
?>
	</td>
	
	<td>
<?php
	echo $row["seminar_id"];
?>
	</td>
	<td>
<?php
	echo $row["amount_paid"];
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

								</article>
								
								
									<!-- Work -->
							<article id="10288">
								<h2 class="major">LIST OF SEMINARS</h2>
								<span class="image main"><img src="work.jpg" alt="" /></span>
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'seminar_wizard';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	if(!$conn)
	{
	die('connection not formed'.mysqli_error());
	}
	echo 'connected successfully<br>';
	$sql='SELECT * FROM seminar_details WHERE college_id=10288';
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
								</article>

								
								
								
								
								
								
								
								
								
								
								
								

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="field half first">
											<label for="demo-name">Name</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
										</div>
										<div class="field half">
											<label for="demo-email">Email</label>
											<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
										</div>
										<div class="field">
											<label for="demo-category">Category</label>
											<div class="select-wrapper">
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
										</div>
										<div class="field half first">
											<input type="radio" id="demo-priority-low" name="demo-priority" checked>
											<label for="demo-priority-low">Low</label>
										</div>
										<div class="field half">
											<input type="radio" id="demo-priority-high" name="demo-priority">
											<label for="demo-priority-high">High</label>
										</div>
										<div class="field half first">
											<input type="checkbox" id="demo-copy" name="demo-copy">
											<label for="demo-copy">Email me a copy</label>
										</div>
										<div class="field half">
											<input type="checkbox" id="demo-human" name="demo-human" checked>
											<label for="demo-human">Not a robot</label>
										</div>
										<div class="field">
											<label for="demo-message">Message</label>
											<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Design:ise a.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
