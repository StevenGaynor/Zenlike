<?php
/*
*HDCLOUD Project : Zenlike
*Name: Steven Gaynor
*Student Number: 14108038
*Date Submitted: 20/5/2015
*/
session_start(); 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'per_ID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

$page_title = 'MyHub';
include('includes/header.html');

require('../connect_db.php');
$per_ID = $_SESSION['per_ID'];
echo  "<main>
			<section id='zenlikeHubContainer'>
				<h2>MyHub</h2>
					<p id='loggedInMsg'>Welcome <b><u>{$_SESSION['first_name']}&nbsp;{$_SESSION['surname']}</u></b>&nbsp;|&nbsp;<span id='myHubButton'><a href='myhub.php'>MyHub</a></span>&nbsp;|&nbsp;<span id='logoutButton'><a href='logout.php'>Logout</a></span></p>";
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
														<!--relaxation-->
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
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-05'
															  AND exerciseEvents.exerciseEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Mon6-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-06'
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-06'
															  AND meditEvents.medEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-06'
															  AND exerciseEvents.exerciseEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Tues6-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-07'
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-07'
															  AND meditEvents.medEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-07'
															  AND exerciseEvents.exerciseEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Wed6-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-08'
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-08'
															  AND meditEvents.medEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-08'
															  AND exerciseEvents.exerciseEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Thurs6-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-09'
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-09'
															  AND meditEvents.medEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-09'
															  AND exerciseEvents.exerciseEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Fri6-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-10'
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-10'
															  AND meditEvents.medEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-10'
															  AND exerciseEvents.exerciseEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Sat6-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-11'
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-11'
															  AND meditEvents.medEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-11'
															  AND exerciseEvents.exerciseEventTime = '06:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td></tr>
								<tr><td>9am - 12pm</td><td><!--Sun9-12-->
														<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-05'
															  AND mealEvents.mealevent_time = '09:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-05'
															  AND meditEvents.medEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-05'
															  AND exerciseEvents.exerciseEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Mon9-12-->
										<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-06'
															  AND mealEvents.mealevent_time = '09:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-06'
															  AND meditEvents.medEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-06'
															  AND exerciseEvents.exerciseEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Tues9-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-07'
															  AND mealEvents.mealevent_time = '09:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-07'
															  AND meditEvents.medEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-07'
															  AND exerciseEvents.exerciseEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Wed9-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-08'
															  AND mealEvents.mealevent_time = '09:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-08'
															  AND meditEvents.medEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-08'
															  AND exerciseEvents.exerciseEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Thurs9-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-09'
															  AND mealEvents.mealevent_time = '09:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-09'
															  AND meditEvents.medEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-09'
															  AND exerciseEvents.exerciseEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Fri9-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-10'
															  AND mealEvents.mealevent_time = '09:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-10'
															  AND meditEvents.medEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-10'
															  AND exerciseEvents.exerciseEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Sat9-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-11'
															  AND mealEvents.mealevent_time = '09:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-11'
															  AND meditEvents.medEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-11'
															  AND exerciseEvents.exerciseEventTime = '09:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td></tr>
								<tr><td>12pm - 3pm</td><td><!--Sun12-3-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-05'
															  AND mealEvents.mealevent_time = '12:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-05'
															  AND meditEvents.medEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-05'
															  AND exerciseEvents.exerciseEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Mon12-3-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-06'
															  AND mealEvents.mealevent_time = '12:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-06'
															  AND meditEvents.medEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-06'
															  AND exerciseEvents.exerciseEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Tues12-3-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-07'
															  AND mealEvents.mealevent_time = '12:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-07'
															  AND meditEvents.medEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-07'
															  AND exerciseEvents.exerciseEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Wed12-3-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-08'
															  AND mealEvents.mealevent_time = '12:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-08'
															  AND meditEvents.medEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-08'
															  AND exerciseEvents.exerciseEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Thurs12-3-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-09'
															  AND mealEvents.mealevent_time = '12:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-09'
															  AND meditEvents.medEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-09'
															  AND exerciseEvents.exerciseEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Fri12-3-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-10'
															  AND mealEvents.mealevent_time = '12:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-10'
															  AND meditEvents.medEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-10'
															  AND exerciseEvents.exerciseEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Sat12-3-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-11'
															  AND mealEvents.mealevent_time = '12:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-11'
															  AND meditEvents.medEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-11'
															  AND exerciseEvents.exerciseEventTime = '12:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td></tr>
								<tr><td>3pm - 6pm</td><td><!--Sun3-6-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-05'
															  AND mealEvents.mealevent_time = '15:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-05'
															  AND meditEvents.medEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-05'
															  AND exerciseEvents.exerciseEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Mon3-6-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-06'
															  AND mealEvents.mealevent_time = '15:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-06'
															  AND meditEvents.medEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-06'
															  AND exerciseEvents.exerciseEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Tues3-6-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-07'
															  AND mealEvents.mealevent_time = '15:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-07'
															  AND meditEvents.medEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-07'
															  AND exerciseEvents.exerciseEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Wed3-6-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-08'
															  AND mealEvents.mealevent_time = '15:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-08'
															  AND meditEvents.medEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-08'
															  AND exerciseEvents.exerciseEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Thurs3-6-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-09'
															  AND mealEvents.mealevent_time = '15:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-09'
															  AND meditEvents.medEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-09'
															  AND exerciseEvents.exerciseEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Fri3-6-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-10'
															  AND mealEvents.mealevent_time = '15:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-10'
															  AND meditEvents.medEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-10'
															  AND exerciseEvents.exerciseEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Sat3-6-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-11'
															  AND mealEvents.mealevent_time = '15:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-11'
															  AND meditEvents.medEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-11'
															  AND exerciseEvents.exerciseEventTime = '15:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td></tr>
								<tr><td>6pm - 9pm</td><td><!--Sun6p-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-05'
															  AND mealEvents.mealevent_time = '18:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-05'
															  AND meditEvents.medEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-05'
															  AND exerciseEvents.exerciseEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Mon6p-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-06'
															  AND mealEvents.mealevent_time = '18:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-06'
															  AND meditEvents.medEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-06'
															  AND exerciseEvents.exerciseEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Tues6p-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-07'
															  AND mealEvents.mealevent_time = '18:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-07'
															  AND meditEvents.medEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-07'
															  AND exerciseEvents.exerciseEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Wed6p-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-08'
															  AND mealEvents.mealevent_time = '18:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-08'
															  AND meditEvents.medEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-08'
															  AND exerciseEvents.exerciseEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Thurs6p-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-09'
															  AND mealEvents.mealevent_time = '18:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-09'
															  AND meditEvents.medEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-09'
															  AND exerciseEvents.exerciseEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Fri6p-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-10'
															  AND mealEvents.mealevent_time = '18:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-10'
															  AND meditEvents.medEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-10'
															  AND exerciseEvents.exerciseEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Sat6p-9-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-11'
															  AND mealEvents.mealevent_time = '18:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-11'
															  AND meditEvents.medEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-11'
															  AND exerciseEvents.exerciseEventTime = '18:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td></tr>
								<tr><td>9pm -12am</td><td><!--Sun9p-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-05'
															  AND mealEvents.mealevent_time = '21:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-05'
															  AND meditEvents.medEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-05'
															  AND exerciseEvents.exerciseEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Mon9p-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-06'
															  AND mealEvents.mealevent_time = '21:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-06'
															  AND meditEvents.medEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-06'
															  AND exerciseEvents.exerciseEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Tues9p-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-07'
															  AND mealEvents.mealevent_time = '21:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-07'
															  AND meditEvents.medEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-07'
															  AND exerciseEvents.exerciseEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Wed9p-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-08'
															  AND mealEvents.mealevent_time = '21:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-08'
															  AND meditEvents.medEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-08'
															  AND exerciseEvents.exerciseEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Thurs9p-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-09'
															  AND mealEvents.mealevent_time = '21:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-09'
															  AND meditEvents.medEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-09'
															  AND exerciseEvents.exerciseEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Fri9p-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-10'
															  AND mealEvents.mealevent_time = '21:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-10'
															  AND meditEvents.medEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-10'
															  AND exerciseEvents.exerciseEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td><td><!--Sat9p-12-->
									<!--meals-->
														<?php 
														
														$q = "SELECT meals.meal_name, mealEvents.mealevent_day, mealEvents.mealevent_time, mealEvents.per_ID
															  FROM meals
															  INNER JOIN mealEvents
															  ON meals.meal_ID = mealEvents.meal_ID
															  WHERE mealEvents.per_ID = '$per_ID'
															  AND mealEvents.mealevent_day = '2015-04-11'
															  AND mealEvents.mealevent_time = '21:00:00' ";
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
														<!--relaxation-->
														<?php
														
														$q = "SELECT meditations.med_name, meditEvents.medEventDay, meditEvents.medEventTime, meditEvents.per_ID
															  FROM meditations
															  INNER JOIN meditEvents
															  ON meditations.med_ID = meditEvents.med_ID
															  WHERE meditEvents.per_ID = '$per_ID'
															  AND meditEvents.medEventDay = '2015-04-11'
															  AND meditEvents.medEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="meditEvent"><strong>'.$row['med_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
														<!--exercises-->
														<?php
														
														$q = "SELECT exercises.exercise_name, exerciseEvents.exerciseEventDay, exerciseEvents.exerciseEventTime, exerciseEvents.per_ID
															  FROM exercises
															  INNER JOIN exerciseEvents
															  ON exercises.exercise_ID = exerciseEvents.exercise_ID
															  WHERE exerciseEvents.per_ID = '$per_ID'
															  AND exerciseEvents.exerciseEventDay = '2015-04-11'
															  AND exerciseEvents.exerciseEventTime = '21:00:00' ";
														$r = mysqli_query($dbc, $q);
														if (mysqli_num_rows($r) > 0)
														{
															while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
															{
															echo '<p class ="exerciseEvent"><strong>'.$row['exercise_name'].
															'</strong></p>';
															}
														}else {echo'&nbsp;';}
														
														?>
								</td></tr>
							</tbody>
						</table> 
						
						<p><!--clear the table--><span id="clearCalendar"><a href="clearCalendar.php" onclick="return confirm('Are you sure you want to clear your events?');">CLEAR Calendar</a></span></p>
						
						<h3>MyEvents</h3>
						<p><a href='choosemeals.php'>Choose Meals</a></p>
						<p><a href='choosexercise.php'>Choose Exercises</a></p>
						<p><a href='chooserelaxation.php'>Choose Relaxations</a></p>
					
					</section>
					
				</section>
			</main>
<?php
	mysqli_close($dbc);
	include ('includes/footer.html');
?>
	