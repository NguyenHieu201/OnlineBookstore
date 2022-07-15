<?php
class LoginController extends Controller
{
  public function loginAction()
  {
    if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
      if ($_SESSION["username"] !== "" && $_SESSION["password"] !== "") {
        include VIEW_PATH . "successful.php";
      } else
        include CURR_VIEW_PATH . "Login.php";
    } else {
      if (array_key_exists("username", $_POST)) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $CustomerModel = new CustomerModel("customers");
        $user = $CustomerModel->getUser($username);
        if ($user != false) {
          if ($username === $user["username"] && $password === $user["password"]) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            if ($user["level"] === 0)
              $_SESSION["user"] = "user";
            else
              $_SESSION["user"] = "admin";
          }
        }
        unset($_POST["username"]);
        unset($_POST["password"]);
        include VIEW_PATH . "successful.php";
      } else include CURR_VIEW_PATH . "Login.php";
    }
  }

  public function logoutAction()
  {
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    include CURR_VIEW_PATH . DS . "Homepage.php";
  }
}