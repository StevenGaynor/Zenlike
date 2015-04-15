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
			<section>
					<h2>Fitness & Exercise</h2>
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

						$sql = "SELECT exercise_ID, exercise_name, exercise_desc, duration_mins, calories_burned FROM exercises";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo " <b>Exercise Number:</b> " .$row["exercise_ID"]. " <b>Exercise Name:</b> " .$row["exercise_name"]. " <b>Description:</b> " . $row["exercise_desc"]. " <b>Duration(mins):</b> ". $row["duration_mins"]. " <b>Calories Burned</b> " . $row["calories_burned"]. "<hr/>" ;
							}
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
											
				</section>
				<form class = "smart-green" action="createExerciseEvent.php" method="post">
						<h1>Create your exercise event here<span>Choose an exercise of your choice from above and when is best to go workout.</span></h1>
						
						<label><span>Enter exercise number: </span><input id="exercise_ID" type="number" name="exercise_ID"></label>
						<label><span>Enter Day: </span>
							<select name="exerciseEventDay">
								<option value="2015-04-05">Sunday</option>
								<option value="2015-04-06">Monday</option>
								<option value="2015-04-07">Tuesday</option>
								<option value="2015-04-08">Wednesday</option>
								<option value="2015-04-09">Thursday</option>
								<option value="2015-04-10">Friday</option>
								<option value="2015-04-11">Saturday</option>
							</select>
						</label>
						<label><span>Enter Time: </span>
							<select name="exerciseEventTime">
								<option value="06:00:00">6am - 9am</option>
								<option value="09:00:00">9am - 12pm</option>
								<option value="12:00:00">12pm - 3pm</option>
								<option value="15:00:00">3pm - 6pm</option>
								<option value="18:00:00">6pm - 9pm</option>
								<option value="21:00:00">9pm - 12am</option>
							</select>
						</label>
						<label>
							<span>&nbsp;</span> 
							<input type="button" class="button" value="Save"> 
						</label>
					</form>
			</main>
			
			<footer>
				<p class="createdBy">Zenlike | Created by Steven Gaynor | 2015</p>
				<nav id="footerNav"><a href="contact.html">Contact Us</a> | <a href="#">Site Map</a></nav>
			</footer>
			
		</div> <!--close outerWrapper-->
	</body>
</html>