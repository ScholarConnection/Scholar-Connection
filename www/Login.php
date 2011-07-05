<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<body>
    <?php

        session_start();

        if ( isset($_SESSION['FailedLogon']) &&
            $_SESSION['FailedLogon'] == TRUE) {
                echo "<p>Incorrect Username and/or Password</p>";
                unset($_SESSION['FailedLogon']);

        } elseif ( isset($_SESSION['UnauthorizedAccess']) &&
            $_SESSION['UnauthorizedAccess'] == TRUE) {
                echo "<p>You must be logged in to view that page. " .
                    "Please log in.</p>";
                unset($_SESSION['UnauthorizedAccess']);
        }
    ?>

    <form action="/LoginCheck.php" method="post">
        <p>Username:</p>
        <p><input type="text" name="username" /></p>
        <p>Password:</p>
        <p><input type="password" name="password" /></p>

        <p><input type="submit" /></p>
    </form>
</body>
</html>
