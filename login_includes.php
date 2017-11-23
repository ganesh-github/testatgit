<?php 
@session_start(); /* Starts the session */

if(!isset($_SESSION['test'])){
	header("location: index.php");
	exit;
}
