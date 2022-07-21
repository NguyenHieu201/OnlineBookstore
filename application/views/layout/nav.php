<?php
require_once VIEW_PATH . "layout" . DS . "header.php";
linkHead(['navbar.css', 'search.js'])
?>

<nav class="top-nav">
  <ul style="height: inherit;">
    <li><a href="?p=Home&c=Home&a=Home">Home</a></li>
    <li class="autocomplete">
      <div class="autocomplete-item">
        <input type="text" id="search" placeholder="Type to search.." name="search">
      </div>
    </li>
    <li class="a-cart"><a href="?p=cart&c=cart&a=view" onclick="checkLogin()">Cart</a></li>
    <li class="a-login"><a href="?p=home&c=Login&a=login">Login</a></li>
    <li class="a-profile"><a href="?p=Customer&c=Customer&a=Profile" style="display: none;" id="profile">Profile</a>
    </li>
    <li class="a-logout"><a href="?p=Home&c=Login&a=Logout" style="display: none;" id="logout">Logout</a></li>
  </ul>
</nav>

<script>
var countries = ["Afghanistan", "Albania"];
autocomplete(document.getElementById("search"), countries);
displayLogout();

function displayLogout() {
  let isLogin = <?php echo isset($_SESSION["user"]) ? 1 : 0; ?>;
  if (isLogin === 1) {
    document.getElementById("logout").style.display = "block";
    document.getElementById("profile").style.display = "block";
  }
}

function checkLogin() {
  let isLogin = <?php echo isset($_SESSION["user"]) ? 1 : 0; ?>;
  if (isLogin === 1) {
    window.location.href = "?p=cart&c=cart&a=view";
  } else {
    alert("Please log in before vew cart");
  }
}
</script>