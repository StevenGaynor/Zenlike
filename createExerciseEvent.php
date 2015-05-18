<?php 
session_start();

if(!isset($_SESSION['per_ID']))
{
  require('login_tools.php');
  load();
}
$page_title = 'Create Exercise Event';
include ('includes/header.html');
require('../connect_db.php');

$per_ID = $_SESSION['per_ID']; 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$exerciseEventDay = $_POST['exerciseEventDay'];
	$exerciseEventTime = $_POST['exerciseEventTime'];
	//a method to ensure exerciseEvent has not been created already at this time
	$q = "SELECT per_ID, exerciseEventDay, exerciseEventTime FROM exerciseEvents
		  WHERE per_ID = '$per_ID'
		  AND exerciseEventDay = '$exerciseEventDay'
		  AND exerciseEventTime = '$exerciseEventTime'
		  ";
	$r = mysqli_query($dbc, $q);
	if (mysqli_num_rows($r) != 0)
		{
			echo "<main><section><h2>Calendar slot full</h2><p>You already have an exercise event scheduled for that day and time. Return to <a href='myhub.php'>MyHub</a> to delete it.</p></section></main>";
			mysqli_close($dbc);
			include('includes/footer.html');
			exit();
		}
}
//the seq below is if there is a null result returned for above
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$exercise_ID = $_POST['exercise_ID'];
	$exerciseEventDay = $_POST['exerciseEventDay'];
	$exerciseEventTime = $_POST['exerciseEventTime'];
	
	$q = "INSERT INTO exerciseEvents (exerciseEventDay, exerciseEventTime, exercise_ID, per_ID)
	      VALUES ('$exerciseEventDay', '$exerciseEventTime', '$exercise_ID', '$per_ID')";
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
