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
						echo"</section>";
				echo "</main>";
include('includes/footer.html');
		