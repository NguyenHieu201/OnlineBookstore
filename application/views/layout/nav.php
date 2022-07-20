<?php
require_once VIEW_PATH . "layout" . DS . "header.php";
linkHead(['navbar.css'])
?>

<nav class="top-nav">
  <ul>
    <li><a href="?p=Home&c=Home&a=Home">Home</a></li>
    <li>  <input type="text" placeholder="Type to search..">
  </li>
    <li><a href="?p=Home&c=Home&a=Cart">Cart</a></li>
    <?php
    if (!(isset($_SESSION["user"]))) {
      echo '<li><a href="?p=home&c=Login&a=login">Login</a></li>';
    } else {
      echo '<li><a href="?p=Customer&c=Customer&a=Profile">Profile</a></li>';
      echo '<li><a href="?p=Home&c=Login&a=Logout">Logout</a></li>';
    }
    ?>
  </ul>
  <hr>
</nav>
