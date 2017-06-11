<?php
include 'session.php';
session_start();
session();
session_destroy();
header("Location: login.php");
?>


