<?php
session_start();
if(!isset($_SESSION['per_ID']))
{
  require('login_tools.php');
  load();
} 
$page_title = 'Relaxation Addition';
include('includes/header.html');
//assign the passed meal ID a variable
if(isset($_GET['id'])) $med_ID = $_GET['id'];

?>
<main>
			<section>
				<form class = 'smart-green' action='createMeditEvent.php' method='post'>
						<h1>Create your relaxation event here<span>Choose when is best to chill out.</span></h1>
						<label><span>Relaxation number: </span><input id='med_ID' type='number' name='med_ID' value="<?php echo htmlspecialchars($med_ID);?>" readonly></label>
						<label><span>Enter Day: </span>
							<select name='medEventDay'>
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
							<select name='medEventTime'>
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