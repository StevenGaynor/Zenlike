<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta name="description" content="balancing Fitness, diet and mindfulness">
		<meta name="keywords" content="zen, meditation, mindfulness, healthy, diet, exercise, balance">
		<meta name="author" content="Steven Gaynor">
		<title>Zenlike | Balancing Fitness, Diet and Mindfulness</title>
	    <link rel="stylesheet" type="text/css" href="css/mainstyle.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
	
	    <!--responsive menu-->
		
	</head>
	
	<body>
		<div id="outerWrapper">
			<header>
					<h1 id="mainLogo">Zenlike</h1>
			</header>
					
			<nav id="topNav">
					<ul id="topNavUl">
						<li><a href="index.html" tabindex="1">Home</a></li> 
						<li><a href="objectives.html" tabindex="2">What We Do</a></li>
						<li><a href="guide.html" tabindex="3">Using Zenlike</a></li>
						<li><a href="myhub.html" tabindex="4">MyHub</a></li>
					</ul>
			</nav>
									
			<main>
			
				<section id="test">
					<h2>Test Data PHP</h2>
					<?php
						$servername = "localhost";
						$username = "z564098";
						$password = "oS7Y7pu50d";
						$dbname = "z564098_Zenlike";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 

						$sql = "SELECT meal_ID, meal_name, meal_description, calorie_count FROM meals";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<b>Meal ID: </b>" . $row["meal_ID"]. " <b>Meal Name:</b> " . $row["meal_name"]. " <b>Description</b>  " . $row["meal_description"]. "<b>Calories  </b>". $row["calorie_count"]. "<br>";
							}
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
				</section>
				<!--<table>
					<tr>
				</table>-->
				
			</main>
			
			<footer>
				<p class="createdBy">Zenlike | Created by Steven Gaynor | 2015</p>
				<nav id="footerNav"><a href="contact.html">Contact Us</a> | About Us | Accessibility | Site Map</nav>
			</footer>
			
		</div> <!--close outerWrapper-->
	</body>
</html>