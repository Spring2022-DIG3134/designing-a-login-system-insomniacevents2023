<?php
     INCLUDE("security.php");
     security_deleteuser();

?>

<html>
    <body>
        <h3>Remove Your Username and Password<h3>
        <form action="remove.php" method="POST">
            <label>Username:</label>
                <input type="text" name="username" />
            <label>Password:</label>
                <input type="password" name="password" />
            <input type="submit" />
        </form>  
    </body>    
</html>      