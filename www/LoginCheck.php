<?php

    session_start();
    if ($_POST['username'] == 'ray' && $_POST['password'] == 'tmppwd') {
        $_SESSION['LoggedIn'] = TRUE;
        $_SESSION['FailedLogon'] = FALSE;
        header("Location: /ExampleRestricted.php");
    } else {
        $_SESSION['LoggedIn'] = FALSE;
        $_SESSION['FailedLogon'] = TRUE;
        header("Location: /Login.php");
    }
    exit();
?>
