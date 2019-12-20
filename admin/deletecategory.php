<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if(deleteCategory($conn,$userId)){
	showmsg('Category Deleted Successfully','success');
	redirection('category.php');
}
?>