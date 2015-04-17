<?php 

session_start();

if(!isset($_SESSION['per_ID']))
{
	require('login_tools.php');
	load();
}

$page_title = 'Zenlike - Food';
include ('includes/header.html');

require('../connect_db.php');
									
	echo "<main>
			
				<section>
					<h2>Our Healthy Meals</h2>";
					echo "<p id='loggedInMsg'>Welcome <b><u>{$_SESSION['first_name']}&nbsp;{$_SESSION['surname']}</u></b>&nbsp;|&nbsp;<a id='myHubButton' href='myhub.php'>MyHub</a>&nbsp;|&nbsp;<span id='logoutButton'><a href='logout.php'>Logout</a></span></p>";
						$q = "SELECT * FROM meals";
						$r = mysqli_query($dbc, $q);

						if (mysqli_num_rows($r) > 0) {
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
							{
								echo '<h3><strong>'.$row['meal_name'].
									 '</strong></h3><p>'.$row['meal_description'].
									 '<br><img style="float:right;" src='.$row['meal_img'].
									 '><p>Calories:&nbsp;'.$row['calorie_count'].
									 '</p><p>Vegetarian?:&nbsp;'.$row['vegetarian'].
									 '</p><p>Vegan?:&nbsp;'.$row['vegan'].
									 '</p><p><a href="addedMeal.php?id='.$row['meal_ID'].
									 '">Save to MyCalendar</a></p>';
							}
							mysqli_close($dbc);
						}else {echo'<p>No meals at present</p>';}
						echo"
											
				</section>";
				echo "
				<form class = 'smart-green' action='createMealEvent.php' method='post'>
						<h1>Create your meal event here<span>Choose a meal of your choice from above and when is best to go eat.</span></h1>
						
						<label><span>Enter meal number: </span><input id='meal_ID' type='number' min='1' max='6' name='meal_ID'></label>
						<label><span>Enter Day: </span>
							<select name='mealevent_day'>
								<option value='2015-04-05'>Sunday</option>
								<option value='2015-04-06'>Monday</option>
								<option value='2015-04-07'>Tuesday</option>
								<option value='2015-04-08'>Wednesday</option>
								<option value='2015-04-09'>Thursday</option>
								<option value='2015-04-10'>Friday</option>
								<option value='2015-04-11'>Saturday</option>
							</select>
						</label>
						<label><span>Enter Time: </span>
							<select name='mealevent_time'>
								<option value='06:00:00'>6am - 9am</option>
								<option value='09:00:00'>9am - 12pm</option>
								<option value='12:00:00'>12pm - 3pm</option>
								<option value='15:00:00'>3pm - 6pm</option>
								<option value='18:00:00'>6pm - 9pm</option>
								<option value='21:00:00'>9pm - 12am</option>
							</select>
						</label>
						<label>
							<span>&nbsp;</span> 
							<input type='submit' class='button' value='Save'> 
						</label>
					</form>
				
				
			</main>";
include('includes/footer.html');
		