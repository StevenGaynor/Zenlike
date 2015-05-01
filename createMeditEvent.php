<?php 
session_start();

if(!isset($_SESSION['per_ID']))
{
  require('login_tools.php');
  load();
}
$page_title = 'Create Meditation Event';
include ('includes/header.html');
require('../connect_db.php');

$per_ID = $_SESSION['per_ID'];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$medEventDay = $_POST['medEventDay'];
	$medEventTime = $_POST['medEventTime'];
	//a method to ensure medEvent has not been created already at this time
	$q = "SELECT per_ID, medEventDay, medEventTime FROM meditEvents
		  WHERE per_ID = '$per_ID'
		  AND medEventDay = '$medEventDay'
		  AND medEventTime = '$medEventTime'
		  ";
	$r = mysqli_query($dbc, $q);
	if (mysqli_num_rows($r) != 0)
	{echo "<main><section><h2>Calendar slot full</h2><p>You already have a relaxation event scheduled for that day and time. Return to <a href='myhub.php'>MyHub</a> to delete it.</p></section></main>";
	mysqli_close($dbc);
	include('includes/footer.html');
	exit();}
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$med_ID = $_POST['med_ID'];
	$medEventDay = $_POST['medEventDay'];
	$medEventTime = $_POST['medEventTime'];
	
	$q = "INSERT INTO meditEvents (medEventDay, medEventTime, med_ID, per_ID)
	      VALUES ('$medEventDay', '$medEventTime', '$med_ID', '$per_ID')";
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
