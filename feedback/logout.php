<?php
  session_start();
  unset($_SESSION['fname']);
  unset($_SESSION['lname']);
  
  header("location:login.php?logout=true");
  
?>
<html>
<head>
<title>Thank You</title>
<script src="https://getbootstrap.com/docs/4.3/getting-started/introduction/" </script>
</head>
<body>
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a>
  </p>
</div>
</body>