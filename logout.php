<?php 

session_start();

if(!isset($_SESSION['per_ID']))
{require('login_tools.php'); load();}

$page_title = 'Goodbye';
include('includes/header.html');

$_SESSION = array();

session_destroy();

echo '<main><section><h2> Thanks for using Zenlike!</h2>
	  <p>Logged out successfully. See you again soon...</p>
	  <p><a href="login.php">Login</a></p></section></main>';

include ('includes/footer.html');

?>