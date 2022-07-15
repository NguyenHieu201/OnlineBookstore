<?php
ob_start();
include VIEW_PATH . DS . "layout" . DS . "header.php"
?>

<!-- Log in form -->

<body>
  <div class="center">
    <h1>Login</h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login">
      <div class="signup_link">
        Not a member? <a href="#">Signup</a>
      </div>
    </form>
  </div>

</body>

</html>