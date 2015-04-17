<?php
session_start(); 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'per_ID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

$page_title = 'Zenlike - MyHub';
include('includes/header.html');

require('../connect_db.php');

  echo  "<main>
			<section id='zenlikeHubContainer'>
				<h2>MyHub</h2>
					<p id='loggedInMsg'>Welcome <b><u>{$_SESSION['first_name']}&nbsp;{$_SESSION['surname']}</u></b>&nbsp;|&nbsp;<a id='myHubButton' href='myhub.php'>MyHub</a>&nbsp;|&nbsp;<span id='logoutButton'><a href='logout.php'>Logout</a></span></p>";
				
					echo "	<section id ='zenlikeCalendar'>
						<h3>Weekly Planner</h3>
						<table>
							<thead>
								<tr><th>Time</th><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr>
							</thead>
							<tbody>
								<tr><td>6am - 9am</td><td id='sunday6to9'>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
								<tr><td>9am - 12pm</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
								<tr><td>12pm - 3pm</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
								<tr><td>3pm - 6pm</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
								<tr><td>6pm - 9pm</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
								<tr><td>9pm -12am</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
							</tbody>
						</table> 
						
						<h3>MyEvents</h3>
						<p><a href='choosemeals.php'>Choose Meals</a></p>
						<p><a href='choosexercise.php'>Choose Exercises</a></p>
						<p><a href='chooserelaxation.php'>Choose Relaxations</a></p>
					
					</section>
					
				</section>
			</main>";
	include ('includes/footer.html');
?>
	