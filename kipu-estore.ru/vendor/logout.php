<?php require_once '../config/databases.php'; 
session_start();
session_destroy(); 
header("location:/index.php"); 
?>