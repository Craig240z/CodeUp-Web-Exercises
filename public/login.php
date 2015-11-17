<?php

// var_dump($_POST);
require_once('functions.php');
$message = '';
// Creating a session 
session_start();
// get the current session id
$sessionId = session_id();
$username = '';

    // Creating logged_in_user if not created already.
    if(isset($_SESSION['LOGGED_IN_USER'])) {
        header('Location: authorized.php');
        die();
    }

    $username =  inputGet('username');
    $password =  inputGet('password');

    // Verifying userename and password.
    if($username == 'guest' && $password == 'password') {
        $_SESSION['LOGGED_IN_USER'] = $username;
        header('Location: authorized.php');
        // Good message.
        die();
    } else {
        // Bad message
        $message = "Please input a valid username and password";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
        <label>User Name</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <button type="submit">Submit</button>
    </form>
    <h2><?= $message ?></h2>
</body>
</html>

