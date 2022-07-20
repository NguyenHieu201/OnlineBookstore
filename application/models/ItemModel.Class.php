<?php
class ItemModel extends Model
{
  function __construct()
  {
    parent::__construct('order_items');
  }

  function getCartItem($cartId)
  {
    $sql = "select * from $this->table where orderid = " . '"' . "$cartId" . '"';
    $itemList = $this->db->getAll($sql);
    $itemId = [];
    $itemQuantity = [];
    foreach ($itemList as $item) {
      $id = $item["book_id"];
      $quantity = $item["quantity"];
      $itemId[] = $id;
      $itemQuantity[] = $quantity;
    }
    $bookModel = new BookModel();
    $bookList = $bookModel->getBooksCart($itemId);
    return [
      "book" => $bookList,
      "quantity" => $itemQuantity
    ];
  }
}