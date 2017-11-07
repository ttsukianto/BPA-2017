<?php
	session_start();

	session_unset();

	echo 'You Have Been Logged Out.';
	header('Location: http://bpa.westada.xyz');
?>