<?php
require VIEW_PATH . "layout" . DS . "header.php";
linkHead(['register.css'])
?>

<form action="?p=home&c=Login&a=register" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="username"><b>Username *</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name">

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address">

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" id="city">

    <label for="country"><b>Country</b></label>
    <input type="text" placeholder="Enter Country" name="country" id="country">

    <label for="zip"><b>Zip code</b></label>
    <input id="zip" name="zip" type="text" inputmode="numeric" pattern="^(?(^00000(|-0000))|(\d{5}(|-\d{4})))$"
      placeholder="Enter zip code">

    <label for="email"><b>Email *</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password *</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password *</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="?p=Home&c=Login&a=Login">Sign in</a>.</p>
  </div>
</form>