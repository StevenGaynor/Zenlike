<?php
/*
*HDCLOUD Project : Zenlike
*Name: Steven Gaynor
*Student Number: 14108038
*Date Submitted: 20/5/2015
*/
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		require('../connect_db.php');
		
		require('login_tools.php');
		
		list($check, $data) = validate($dbc, $_POST['email'], $_POST['pass']);
		
		if($check)
		{
			session_start();
			
			$_SESSION['per_ID'] = $data['per_ID'];
			$_SESSION['first_name'] = $data['first_name'];
			$_SESSION['surname'] = $data['surname'];
			
			load('myhub.php');
		}
		else{$errors = $data;}
		
		mysqli_close($dbc);
	}
	include('login.php');
?>