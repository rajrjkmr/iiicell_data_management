<?php
// remove all session variables
session_unset();
session_start();
$_SESSION['myValue'];
$_SESSION['dpet'];
// destroy the session
session_destroy();
header("location:home.html");
echo "SESSION CLOSED".$_SESSION['myValue'];
?>