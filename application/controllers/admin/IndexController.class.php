<?php

class IndexController extends Controller
{
  public function __construct()
  {
    if ($this->accessAction() === false) {
      $this->redirect("?p=home&c=Login&a=login", message: "Access Denied");
    }
  }

  public static function accessAction()
  {
    if (isset($_SESSION["user"])) {
      if ($_SESSION["user"] === "admin")
        return true;
      else return false;
    }
    return false;
  }

  public function productAction()
  {
    $bookModel = new BookModel("books");
    $books = $bookModel->getBooks();
    include VIEW_PATH . DS . "admin" . DS . "ProductList.php";
  }

  public function editAction()
  {
    if (isset($_GET["book_isbn"])) {
      $bookIsbn = $_GET["book_isbn"];
      $bookModel = new BookModel("books");
      $book = $bookModel->editBook($bookIsbn);
      include VIEW_PATH . DS . "product" . DS . "editBook.php";
    } else {
      if (isset($_POST["book_isbn"])) {
        $bookIsbn = $_POST["book_isbn"];
        $bookModel = new BookModel("books");
        // Update book
        $image = $_FILES["image"]["tmp_name"];
        $imageFile = addslashes(file_get_contents($image));

        $bookTitle = $_POST["book_title"];
        $bookAuthor = $_POST["book_author"];
        $bookPrice = $_POST["book_price"];
        $publisher = $_POST["publisher"];
        $bookModel->updateBook([
          "book_isbn" => $bookIsbn,
          "book_title" => $bookTitle,
          "book_author" => $bookModel->cleanString($bookAuthor),
          "book_image" => $imageFile,
          "book_price" => $bookPrice,
          "publisher" => $bookModel->cleanString($publisher)
        ]);
        $this->redirect(url: '?p=admin&c=Index&a=product', message: "Update Success", wait: 0);
      }
    }
  }

  public function addAction()
  {
    if (isset($_POST["book_title"])) {
      $bookModel = new BookModel("books");
      // Update book
      $image = $_FILES["image"]["tmp_name"];
      $imageFile = addslashes(file_get_contents($image));

      $bookTitle = $_POST["book_title"];
      $bookAuthor = $_POST["book_author"];
      $bookPrice = $_POST["book_price"];
      $publisher = $_POST["publisher"];
      $bookModel->insert([
        "book_title" => $bookTitle,
        "book_author" => $bookModel->cleanString($bookAuthor),
        "book_image" => $imageFile,
        "book_price" => $bookPrice,
        "publisher" => $bookModel->cleanString($publisher)
      ]);
      $this->redirect(url: '?p=admin&c=Index&a=product', message: "Insert Success", wait: 0);
    } else
      include VIEW_PATH . DS . "product" . DS . "addBook.php";
  }

  public function deleteAction()
  {
    if (isset($_GET["book_isbn"])) {
      $bookIsbn = $_GET["book_isbn"];
      $bookModel = new BookModel("books");
      $bookModel->deleteBook($bookIsbn);
      $this->redirect(url: '?p=admin&c=Index&a=product', message: "Update Success", wait: 0);
    }
  }
}