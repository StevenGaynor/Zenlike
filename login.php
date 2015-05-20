<?php 
/*
*HDCLOUD Project : Zenlike
*Name: Steven Gaynor
*Student Number: 14108038
*Date Submitted: 20/5/2015
*/
	$page_title = 'Login';
	include('includes/header.html');
	if(isset($errors) && !empty($errors))
		{
			echo '<p id="err_msg">There was a problem with your login attempt.:<br>';
			foreach($errors as $msg)
			{
				echo" - $msg<br>";
			}
						echo 'Please try again or <a href="register.php">Register</a></p>';
					}
				?>
				<main>
					<section>
					<form action="login_action.php" method="POST" class="basic-grey">
							<h1>Login</h1>
								<label>
									<span>Email Address :</span>
									<input id="email" type="email" name="email">
								</label>
								<label>
									<span>Password: </span>
									<input id="pass" type="password" name="pass">
								</label>
								<label>
									<span>&nbsp;</span> 
									<input type="submit" class="button" value="Login"> 
							    </label>   
					</form>
				</section>
				
				
			</main>
<?php include('includes/footer.html'); ?>