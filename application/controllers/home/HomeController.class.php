<?php
class HomeController extends Controller
{
  public function HomeAction()
  {
    $bestSeller = [2, 3, 4];
    $bookList = [];
    $bookModel = new BookModel("books");
    $bookAll = $bookModel->getBooks();
    $recommendSize = count($bookAll);
    foreach ($bestSeller as $bookId) {
      $book = $bookModel->getBook($bookId);
      $bookList[] = ($book);
    }
    include VIEW_PATH . "home" . DS . "Homepage.php";
  }

  public function CartAction()
  {
  }
}