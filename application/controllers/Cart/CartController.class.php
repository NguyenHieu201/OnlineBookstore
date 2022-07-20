<?php
class CartController extends Controller
{
  public function viewAction()
  {
    if (isset($_SESSION["username"])) {
      $userModel = new CustomerModel();
      $user = $userModel->getUser($_SESSION["username"]);
      $userId = $user["customerid"];
      $cartModel = new CartModel();
      $cart = $cartModel->getCartItem($userId);
      if ($cart == false) {
        // view nothing in cart
      } else {
        $cartId = $cart['orderid'];
        $itemModel = new ItemModel();
        $itemList = $itemModel->getCartItem($cartId);
        $_SESSION["orderid"] = $cartId;
        $bookList = $itemList["book"];
        $quantity = $itemList["quantity"];
        // redirect to cart view
        include VIEW_PATH . "home" . DS . "Cart.php";
      }
    } else {
      echo '<script language="javascript">';
      echo 'alert("Please log in to view your cart")';
      echo '</script>';
    }
  }

  public function addAction()
  {
    // Method post itemid and quantity
  }
}