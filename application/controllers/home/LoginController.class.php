<?php
class LoginController extends Controller
{
  public function loginAction()
  {
    if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
      if ($_SESSION["username"] !== "" && $_SESSION["password"] !== "") {
        $this->redirect("?p=Home&c=Home&a=Home", "To home");
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
        $this->redirect("?p=Home&c=Home&a=Home", "To home");
      } else include CURR_VIEW_PATH . "Login.php";
    }
  }

  public function logoutAction()
  {
    session_destroy();
    $this->redirect("?p=Home&c=Home&a=Home", "return Home");
  }

  public function registerAction()
  {
    if (array_key_exists("username", $_POST)) {
      echo "Hello world";
      $_POST = array();
    } else include VIEW_PATH . "home" . DS . "Register.php";
  }
}