Branch 
<?php 
session_start(); 
/**
 * Description: User authentication
 */
//include database connection file
require_once 'config.php';
//define database object
global $dbc;
$stmt = $dbc->prepare("SELECT * from users_master WHERE email='".$_POST['email']."' && password='".  md5($_POST['password'])."'");
$stmt->execute();
$row = $stmt->rowCount();
$result = $stmt->fetchAll();

if($row > 0){    
 echo 'correct';
 $_SESSION['test']=$result[0]['cust_id'];
}else{ 
	echo 'wrong';
} 
?>
