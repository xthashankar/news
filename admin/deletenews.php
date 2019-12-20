<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if(deleteNews($conn,$userId)){
	showmsg('News Deleted Successfully','success');
	redirection('news.php');
}
?>