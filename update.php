<?php
    require_once("security.php");
    security_updatePassword();
?>

<html>
    <body>
        <h2>Update Your Password</h2>
        <form action="update.php" method="POST">
            <label>Username:</label>
                <input type="text" name="username" />
            <label>Password:</label>
                <input type="password" name="password" />
            <label>New Password:</label>
                <input type="password" name="newPassword" />
            <input type="submit" />
        
            <a href='signup.php'><p>You need to be signed up to have access to this page.<br> Please sign up here.</p></a>
        
        </form>
        
    </body>
</html>