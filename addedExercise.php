<?php
session_start();
if(!isset($_SESSION['per_ID']))
{
  require('login_tools.php');
  load();
} 
$page_title = 'Exercise Addition';
include('includes/header.html');
//assign the passed meal ID a variable
if(isset($_GET['id'])) $exercise_ID = $_GET['id'];

?>
<main>
			<section>
				<form class = 'smart-green' action='createExerciseEvent.php' method='post'>
						<h1>Create your exercise event here<span>Choose when is best to work out.</span></h1>
						<label><span>Exercise number: </span><input id='exercise_ID' type='number' name='exercise_ID' value="<?php echo htmlspecialchars($exercise_ID);?>" readonly></label>
						<label><span>Enter Day: </span>
							<select name='exerciseEventDay'>
								<option value='2015-04-05'>Sunday</option>
								<option value='2015-04-06'>Monday</option>
								<option value='2015-04-07'>Tuesday</option>
								<option value='2015-04-08'>Wednesday</option>
								<option value='2015-04-09'>Thursday</option>
								<option value='2015-04-10'>Friday</option>
								<option value='2015-04-11'>Saturday</option>
							</select>
						</label>
						<label><span>Enter Time: </span>
							<select name='exerciseEventTime'>
								<option value='06:00:00'>6am - 9am</option>
								<option value='09:00:00'>9am - 12pm</option>
								<option value='12:00:00'>12pm - 3pm</option>
								<option value='15:00:00'>3pm - 6pm</option>
								<option value='18:00:00'>6pm - 9pm</option>
								<option value='21:00:00'>9pm - 12am</option>
							</select>
						</label>
						<label>
							<span>&nbsp;</span> 
							<input type='submit' class='button' value='Save'> 
						</label>
					</form>
				</section>				
			</main>
<?php
include ('includes/footer.html');
?>