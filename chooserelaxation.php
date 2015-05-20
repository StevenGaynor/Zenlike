<?php 
/*
*HDCLOUD Project : Zenlike
*Name: Steven Gaynor
*Student Number: 14108038
*Date Submitted: 20/5/2015
*/
session_start();

if(!isset($_SESSION['per_ID']))
{
	require('login_tools.php');
	load();
}

$page_title = 'Relaxation';
include ('includes/header.html');

require('../connect_db.php');
									
	echo "<main>
			
				<section>
					<h2>Relaxation</h2>";
					echo "<p id='loggedInMsg'>Welcome <b><u>{$_SESSION['first_name']}&nbsp;{$_SESSION['surname']}</u></b>&nbsp;|&nbsp;<a id='myHubButton' href='myhub.php'>MyHub</a>&nbsp;|&nbsp;<span id='logoutButton'><a href='logout.php'>Logout</a></span></p>";
						$q = "SELECT * FROM meditations";
						$r = mysqli_query($dbc, $q);

						if (mysqli_num_rows($r) > 0) {
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
							{
								echo '<h3><strong>'.$row['med_name'].
									 '</strong></h3><p>'.$row['med_desc'].
									 '</p><p>Duration (mins):&nbsp;'.$row['duration_mins'].
									 '</p><p><a href="addedMeditation.php?id='.$row['med_ID'].
									 '">Save to MyCalendar</a></p>';
							}
							mysqli_close($dbc);
						}else {echo'<p>No meditations at present</p>';}
						echo"</section>";
				echo "</main>";
include('includes/footer.html');