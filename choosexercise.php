<?php 

session_start();

if(!isset($_SESSION['per_ID']))
{
	require('login_tools.php');
	load();
}

$page_title = 'Zenlike - Exercise';
include ('includes/header.html');

require('../connect_db.php');
									
	echo "<main>
			
				<section>
					<h2>Our Healthy Exercises</h2>";
					echo "<p id='loggedInMsg'>Welcome <b><u>{$_SESSION['first_name']}&nbsp;{$_SESSION['surname']}</u></b>&nbsp;|&nbsp;<a id='myHubButton' href='myhub.php'>MyHub</a>&nbsp;|&nbsp;<span id='logoutButton'><a href='logout.php'>Logout</a></span></p>";
						$q = "SELECT * FROM exercises";
						$r = mysqli_query($dbc, $q);

						if (mysqli_num_rows($r) > 0) {
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
							{
								echo '<h3><strong>'.$row['exercise_name'].
									 '</strong></h3><p>'.$row['exercise_desc'].
									 '</p><img style="float:right;" src='.$row['exercise_img'].
									 '><p>Calories Burned:&nbsp;'.$row['calories_burned'].
									 '</p><p>Duration (mins):&nbsp;'.$row['duration_mins'].
									 '</p><p><a href="addedExercise.php?id='.$row['exercise_ID'].
									 '">Save to MyCalendar</a></p>';
							}
							mysqli_close($dbc);
						}else {echo'<p>No exercises at present</p>';}
						echo"</section>";
				echo "</main>";
include('includes/footer.html');