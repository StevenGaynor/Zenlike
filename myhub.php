<?php
session_start(); 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'per_ID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

$page_title = 'Zenlike - MyHub';
include('includes/header.html');

require('../connect_db.php');
$per_ID = $_SESSION['per_ID'];
echo  "<main>
			<section id='zenlikeHubContainer'>
				<h2>MyHub</h2>
					<p id='loggedInMsg'>Welcome <b><u>{$_SESSION['first_name']}&nbsp;{$_SESSION['surname']}</u></b>&nbsp;|&nbsp;<a id='myHubButton' href='myhub.php'>MyHub</a>&nbsp;|&nbsp;<span id='logoutButton'><a href='logout.php'>Logout</a></span></p>";
?>
				
					<section id ='zenlikeCalendar'>
						<h3>Weekly Planner</h3>
						<table>
							<thead>
								<tr><th>Time</th><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr>
							</thead>
							<tbody>
								<tr><td>6am - 9am</td><td><!--SUNDAY 6:00-->
														
														<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-05'
															  AND mealEvents.mealevent_time = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="mealEvent"><strong>'.$row['meal_name'].
															'</strong></p>';
															}//mysqli_close($dbc);
														}else {echo'&nbsp;';}
														
														?>
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-05'
															  AND meditEvents.medEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}mysqli_close($dbc);
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														
								
								
								
								</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
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
			</main>
<?php
	include ('includes/footer.html');
?>
	