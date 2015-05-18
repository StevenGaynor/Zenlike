<?php 
session_start();

if(!isset($_SESSION['per_ID']))
{
  require('login_tools.php');
  load();
}
$page_title = 'Clear Weekly Calendar';
include ('includes/header.html');
require('../connect_db.php');

$per_ID = $_SESSION['per_ID'];

//these queries clear all events associated with the user when they click the clear button on MyHub

//clear exerciseEvents
$q1 = "DELETE from exerciseEvents
	  WHERE per_ID = '$per_ID'";
$r1 = mysqli_query($dbc, $q1);


//clear mealEvents
$q2 = "DELETE from mealEvents
		WHERE per_ID = '$per_ID'";

$r2 = mysqli_query($dbc, $q2);
//clear medEvents
$q3 = "DELETE from meditEvents
		WHERE per_ID = '$per_ID'";

$r3 = mysqli_query($dbc, $q3);

if ($r1 && $r2 && $r3)
	{
		echo '<main><section><h2>Calendar Cleared</h2><p>You can now start a fresh weekly plan.</p><p>Go back to MyHub : <a href="myhub.php">MyHub</a></p></section></main>';
		mysqli_close($dbc);
		include('includes/footer.html');
		exit();
	} else { echo'<main><section><h2>Error</h2><p>Database connectivity issue</p></section></main>';}
?>