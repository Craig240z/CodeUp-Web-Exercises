<?php 
session_start();

// get the current session id
$sessionId = session_id();

if($_SESSION['LOGGED_IN_USER'] == FALSE) {
        header('location: login.php');
        die();
   } 
   $userName = $_SESSION['userName'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
     <h2>You are an authorized user.</h2>
    <h2>You are logged in as <?= $userName ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>