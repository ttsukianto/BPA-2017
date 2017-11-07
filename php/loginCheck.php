<?php
	session_start();

	if ($_SESSION['login_user']){
		echo 'This User Is Logged In As: '.$_SESSION['login_user'];
	}
	else{
		echo 'User Not Logged In!';
	}

?>