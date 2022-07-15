<?php
class BookModel extends Model
{
  public function getBooks()
  {
    $sql = "select * from $this->table";
    $books = $this->db->getAll($sql);
    return $books;
  }

  public function insertBook()
  {
  }

  public function editBook($bookIsbn)
  {
    $book = $this->selectByPk($bookIsbn);
    return $book;
  }

  public function updateBook($book)
  {
    $this->update($book);
  }

  public function getBook($bookIsbn)
  {
    $sql = "select * from $this->table where book_isbn = " . '"' . "$bookIsbn" . '"';
    $book = $this->db->getRow($sql);
    return $book;
  }

  public function addBook($book)
  {
    $this->insert($book);
  }

  public function deleteBook($bookIsbn)
  {
    $this->delete($bookIsbn);
  }

  public function cleanString($str)
  {
    return $this->db->escape_string($str);
  }
}