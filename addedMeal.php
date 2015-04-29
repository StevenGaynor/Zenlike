<?php
session_start();
if(!isset($_SESSION['per_ID']))
{
  require('login_tools.php');
  load();
} 
$page_title = 'Meal Addition';
include('includes/header.html');
//assign the passed meal ID a variable
if(isset($_GET['id'])) $meal_ID = $_GET['id'];
//require('../connect_db.php');
?>
<main>
			<section>
				<form class = 'smart-green' action='createMealEvent.php' method='post'>
						<h1>Create your meal event here<span>Choose when is best to go eat your choice of meal.</span></h1>
						<label><span>Meal number: </span><input id='meal_ID' type='number' name='meal_ID' value="<?php echo htmlspecialchars($meal_ID);?>" readonly></label>
						<label><span>Enter Day: </span>
							<select name='mealevent_day'>
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
							<select name='mealevent_time'>
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
