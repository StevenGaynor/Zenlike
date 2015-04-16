<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta name="description" content="balancing Fitness, diet and mindfulness">
		<meta name="keywords" content="zen, meditation, mindfulness, healthy, diet, exercise, balance">
		<meta name="author" content="Steven Gaynor">
		<title>Zenlike | Balancing Fitness, Diet and Mindfulness</title>
	    <link rel="stylesheet" type="text/css" href="css/mainstyle.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<script type="text/javascript" src="js/mainscript.js"></script>
	</head>
	
	<body>
		<div id="outerWrapper">
			<header>
					<h1 id="mainLogo">Zenlike</h1>
			</header>
					
			<nav id="topNav">
					<ul id="topNavUl">
						<li><a href="index.html" tabindex="1">Home</a></li> 
						<li><a href="objectives.html" tabindex="2">What We Do</a></li>
						<li><a href="guide.html" tabindex="3">Using Zenlike</a></li>
						<li><a href="myhub.php" tabindex="4">MyHub</a></li>
					</ul>
			</nav>
									
			<main>
				<section>
					
						<?php 
							if ($_SERVER['REQUEST_METHOD'] == 'POST')
							{
								require('../connect_db.php');
								$errors = array();
								
								if(empty($_POST['first_name']))
								{$errors[] = 'Enter your first name.';}
								else {$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));}
								
								if (empty($_POST['surname']))
								{$errors[] = 'Enter your surname.';}
								else{$sn = mysqli_real_escape_string($dbc, trim($_POST['surname']));}
								
							    if (empty($_POST['email']))
								{$errors[] = 'Enter your email address.';}
							    else {$e = mysqli_real_escape_string($dbc, trim($_POST['email']));}
								
								if (!empty($_POST['pass1']))
								{
								  if($_POST['pass1'] != $_POST['pass2'])
								  {$errors[] = 'Passwords do not match.';}
								  else 
								  {$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));}
							    }
								  else {$errors[] = 'Enter your password.';}
																  
								if(empty($errors))
								{
									$q = "SELECT per_ID FROM persons WHERE email='$e'";
									$r = mysqli_query($dbc, $q);
									if (mysqli_num_rows($r)!=0)
									{$errors[] = 'Email address already registered.
									<a href="login.php">Login</a>';}
								}
								
								if (empty($errors))
								{
									$q = "INSERT INTO persons (first_name, surname, email, pass, reg_date)
									      VALUES('$fn','$sn','$e', SHA1('$p'),NOW())";
									$r = mysqli_query($dbc, $q);
									
									if($r)
									{
										echo '<section>
											  <h1>Registered!</h1>
											  <p>You are now registered.</p>
											  <nav class="loginRegisterBox">
												<ul>
													<li><a href="login.php">Login</a></li>
												</ul>
											  </nav>
											  </section>';
									}
									
									mysqli_close($dbc);
									exit();
								}
								else {
									echo'<h1>Error</h1>
									<p id="err_msg">The following error(s) occurred:<br>';
									foreach($errors as $msg)
									{
									  echo "-$msg<br>";
									}
									echo 'Please try again.</p>';
									mysqli_close($dbc);
								}							
							}
						?>
						<form action="register.php" method="POST" class="basic-grey">
						<h1>Register for Zenlike
						<span>Please fill all the texts in the fields.</span>
						</h1>
							<label>
								<span>First Name :</span>
								<input id="name" type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>">
							</label>
							<label>
								<span>Surname:</span>
								<input id="surname" type="text" name="surname" value="<?php if(isset($_POST['surname'])) echo $_POST['surname'];?>">
							</label>							
							<label>
								<span>Your Email :</span>
								<input id="email" type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
							</label>
							<label>
								<span>Password :</span>
								<input id="pass1" type="password" name="pass1" value="<?php if(isset($_POST['pass1'])) echo $_POST['pass1'];?>">
							</label>
							<label>
								<span>Confirm Password :</span>
								<input id="pass2" type="password" name="pass2" value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2'];?>">
							</label>
							<label>
								<span>&nbsp;</span> 
								<input type="submit" class="button" value="Register"> 
							</label>   
						</form>
						
						
			</main>
			
			<footer>
				<p class="createdBy">Zenlike | Created by Steven Gaynor | 2015</p>
				<nav id="footerNav"><a href="contact.html">Contact Us</a> | <a href="#">Site Map</a></nav>
			</footer>
			
		</div> <!--close outerWrapper-->
	</body>
</html>