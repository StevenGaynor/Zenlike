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
			
			<footer>
				<p class="createdBy">Zenlike | Created by Steven Gaynor | 2015</p>
				<nav id="footerNav"><a href="contact.html">Contact Us</a> | <a href="#">Site Map</a></nav>
			</footer>
			
		</div> <!--close outerWrapper-->
	</body>
</html>