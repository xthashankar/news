<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if(deletegallery($conn,$userId)){
	showmsg('Photo Deleted Successfully','success');
	redirection('photogallery.php');
}
?>