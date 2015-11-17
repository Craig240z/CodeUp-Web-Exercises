<?php 
session_start();

// get the current session id
$sessionId = session_id();

if(!isset($_SESSION['LOGGED_IN_USER'])) {
        header('location: login.php');
        die();
   } 
   $username = $_SESSION['LOGGED_IN_USER'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
     <h2>You are an authorized user.</h2>
    <h2>You are logged in as <?= escape($username) ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>