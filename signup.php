<?php
  require_once("security.php");
  $created=false;
  if(security_validate()){
    security_addNewUser();
    $created=true;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<?php if(!security_loggedIn() && !$created): ?>
    <p><a href="index.php">Log In</a> or Sign Up Below</p>
    <form method="POST" action="signup.php">
       <input type="text" placeholder="User Name" name="username">
       <input type="password" placeholder="Password" name="password">
       <button type="submit">Sign Up</button>
    </form> 
<?php elseif($created): ?>
    <p>Account Created. Please <a href="index.php">Go Home</a></p>
<?php else: ?>
    <p>You are logged in. <a href="index.php">Logout</a>Go Home</p>
<?php endif; ?>    
</body>
</html>