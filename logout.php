<?php

error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);
	session_start();
	unset($_SESSION[name]);
	session_destroy($_SESSION[name]);
	header("Location: index.html");
	
?>
