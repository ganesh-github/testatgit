<?php
session_start();
if(!isset($_SESSION['test'])) {
	header("location:index.php");
	exit;
}
require_once('login_includes.php');
?>

<h2>Welcome to Angularjs dashboard.</h2>
