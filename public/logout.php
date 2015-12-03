<?php 
require_once '../Auth.php';
require_once '../Input.php';

$message = '';

session_start();
Auth::logout();

header('location: login.php');
die();
?>