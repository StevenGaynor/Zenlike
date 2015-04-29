<?php 
session_start();

if(!isset($_SESSION['per_ID']))
{
  require('login_tools.php');
  load();
}
$page_title = 'Create Meal Event | Zenlike';
include ('includes/header.html');
require('../connect_db.php');

$per_ID = $_SESSION['per_ID']; 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$mealevent_day = $_POST['mealevent_day'];
	$mealevent_time = $_POST['mealevent_time'];
	//a method to ensure mealEvent has not been created already at this time
	$q = "SELECT per_ID, mealevent_day, mealevent_time FROM mealEvents
		  WHERE per_ID = '$per_ID'
		  AND mealevent_day = '$mealevent_day'
		  AND mealevent_time = '$mealevent_time'
		  ";
	$r = mysqli_query($dbc, $q);
	if (mysqli_num_rows($r) != 0)
		{
			echo "<main><section><h2>Calendar slot full</h2><p>You already have a meal event scheduled for that day and time. Return to <a href='myhub.php'>MyHub</a> to delete it.</p></section></main>";
			mysqli_close($dbc);
			include('includes/footer.html');
			exit();
		}
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$meal_ID = $_POST['meal_ID'];
	$mealevent_day = $_POST['mealevent_day'];
	$mealevent_time = $_POST['mealevent_time'];
	
	$q = "INSERT INTO mealEvents (mealevent_day, mealevent_time, meal_ID, per_ID)
	      VALUES ('$mealevent_day', '$mealevent_time', '$meal_ID', '$per_ID')";
	$r = mysqli_query($dbc, $q);
	
	if ($r)
	{
		echo '<main><section><h2>Event registered</h2><p>The event is now on your weekly planner.</p><p>Check your calendar : <a href="myhub.php">MyHub</a></p></section></main>';
		mysqli_close($dbc);
		include('includes/footer.html');
		exit();
	} else { echo'<main><section><h2>Error</h2><p>Database connectivity issue</p></section></main>';}
}
?>
