<?php
$servername = "localhost";
$username = "z564098";
$password = "oS7Y7pu50d";
$dbname = "z564098_Zenlike";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// define variables and set to empty values
//$Err = $Err = $Err = $Err = "";
$meal_ID = $mealevent_day = $mealevent_time= "";
$per_ID = '1'; //until login function implemented

// set variable as form posts
$meal_ID = $_POST["meal_ID"];
$mealevent_day = $_POST["mealevent_day"];
$mealevent_time = $_POST["mealevent_time"];

$sql = "INSERT INTO mealEvents (mealEventID, mealevent_day, mealevent_time, meal_ID, per_ID)
VALUES (null, '$mealevent_day', '$mealevent_time', '$meal_ID', '$per_ID');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully. ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="myhub.html">MyHub</a>
