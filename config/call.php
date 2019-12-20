<?php
session_start();
include 'settings.php';
include 'connect.php';
include 'helpers.php';
include 'loginfunctions.php';
include 'userfunctions.php';
include 'newsfunctions.php';
include 'categoryfunctions.php';
include 'photofunctions.php';
include 'photogalleryfunctions.php';
include 'commentfunction.php';
include 'subscribefunction.php';
$conn = new connection(DBSERVER,DBUSER,DBPASS,DBNAME);
$conn = $conn->connectDB();
