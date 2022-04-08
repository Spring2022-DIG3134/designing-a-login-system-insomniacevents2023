<?php
  require_once("security.php");
  if(security_validate()){
    security_login();
    header('Location: '.$_SERVER['PHP_SELF']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php if(!security_loggedIn()): ?>
    <p><a href="signup.php">Sign Up</a> or Login Below</p>
    <form method="POST" action="login.php">
       <input type="text" placeholder="User Name" name="username">
       <input type="password" placeholder="Password" name="password">
       <button type="submit">Login</button>
    </form> 
<?php else: ?>
    You are logged in. <a href="logout.php">Logout</a>
<?php endif; ?>    
</body>
</html>