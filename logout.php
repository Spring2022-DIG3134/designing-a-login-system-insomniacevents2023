<?php
  include("login.php");
  require_once("security.php");
  security_logout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  if (security_loggedIn()) {
    <p>You are logged out</p>
    <a href="login.php">Click to log</a>
  }
  else{
    <a href='index.php'> Main Menu</a>;
  }
</body>
</html>