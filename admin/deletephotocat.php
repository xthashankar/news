<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if(deletephoto($conn,$userId)){
	showmsg('Photo Category Deleted Successfully','success');
	redirection('photocategory.php');
}
?>