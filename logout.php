<?php
require(dirname(__DIR__) . '/config/config.php');
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ". $web["link"] ."");
exit;
?>