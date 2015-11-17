<?php

// var_dump($_POST);

$message = '';

if(isset($_POST['userName']) && isset($_POST['password'])) {
    // Creating a session 
    session_start();

    // get the current session id
    $sessionId = session_id();

    $userName =  htmlspecialchars(strip_tags($_POST['userName']));
    $password =  htmlspecialchars(strip_tags($_POST['password']));

    // Creating logged_in_user if not created already.
    if(!isset($_SESSION['LOGGED_IN_USER'])) {
        $_SESSION['LOGGED_IN_USER'] = $userName;
    }

    if($userName == 'guest' && $password == 'password') {
        // header('Location: authorized.php');
        $message = "Welcome " . $_SESSION['LOGGED_IN_USER'];
        // die();
    } else {
        $message = "Please input a valid username and password";
    }
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
        <input type="text" name="userName"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <button type="submit">Submit</button>
    </form>
    <h2><?= $message ?></h2>
</body>
</html>

