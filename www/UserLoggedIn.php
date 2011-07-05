<?php

    session_start();

    // If the user is not logged in, redirect them to the home page.
    if (!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] != TRUE) {
        $_SESSION['UnauthorizedAccess'] = TRUE;
        header("Location:  /Login.php");
        exit();
    }
?>
