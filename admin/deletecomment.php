<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if(deletecomment($conn,$userId)){
	showmsg('Comment Deleted Successfully','success');
	redirection('Comment.php');
}
?>