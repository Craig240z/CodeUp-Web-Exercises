<?php 
function endSession() {
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

$message = '';

session_start();

// get the current session id
$sessionId = session_id();

if(isset($_SESSION['LOGGED_IN_USER'])) {
        endSession();
        header('location: login.php');
        die();
   } 
   $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>

</body>
</html>