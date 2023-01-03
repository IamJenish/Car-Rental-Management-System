<?php
    if(isset($_COOKIE["user"]))
    {
        header("location: http://localhost/Home/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login 1</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <div class="background"></div>
    <div class="login-card">
      <h2>Sign-In</h2>
      <h3>Enter your credentials</h3>
      <form class="login-form" method="get" action="http://localhost/Home/accountverification.php">
        <input type="text" placeholder="Username" name="cname" />
        <input type="password" placeholder="Password" name="pass"/>
        <span><a href="https://website.com" style="position:absolute;left:30px;">Forgot your password?</a>
        <a href="http://localhost/Home/signup.php" style="position:absolute;left:220px;">Create a new account</a></span><br>
        <button type="submit">LOGIN</button>
      </form>
    </div>
  </body>
</html>