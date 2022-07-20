<?php
require_once VIEW_PATH . "layout" . DS . "header.php";
linkHead(['navbar.css', 'search.js'])
?>

<nav class="top-nav">
  <ul>
    <li><a href="?p=Home&c=Home&a=Home">Home</a></li>
    <li class="autocomplete">
      <input type="text" id="search" placeholder="Type to search.." name="search">
    </li>
    <li><a href="?p=cart&c=cart&a=view" onclick="checkLogin()">Cart</a></li>
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

<script>
  var countries = ["Afghanistan", "Albania"];
  autocomplete(document.getElementById("search"), countries);

  function checkLogin() {
    let isLogin = <?php echo isset($_SESSION["user"]) ? 1 : 0; ?>;
    if (isLogin === 1) {
      window.location.href = "?p=cart&c=cart&a=view";
    } else {
      alert("Please log in before vew cart");
    }
  }
</script>