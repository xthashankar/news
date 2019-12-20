<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if(deletevideo($conn,$userId)){
	showmsg('User Deleted Successfully','success');
	redirection('user.php');
}
?>