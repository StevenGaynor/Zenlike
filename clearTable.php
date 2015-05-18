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

//this query clears all events associated with the user

//clear exerciseEvents
exerciseEvents
//clear mealEvents
mealEvents
//clear medEvents
meditEvents