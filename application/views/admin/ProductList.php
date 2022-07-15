<div style="overflow-x:auto;">
  <button><a href="?p=admin&c=Index&a=add">Insert new book</a></button>
  <table class="table" style="margin-top: 20px">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Image</th>
      <th>Description</th>
      <th>Price</th>
      <th>Publisher</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <?php foreach ($books as $book) { ?>
    <tr>
      <td><?php echo $book['book_isbn']; ?></td>
      <td><?php echo $book['book_title']; ?></td>
      <td><?php echo $book['book_author']; ?></td>
      <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($book['book_image']); ?>"
          alt="BookCover"></td>
      <td><?php echo $book['book_price']; ?></td>
      <td><?php echo $book['publisher']; ?></td>
      <td><a href="?p=admin&c=Index&a=edit&book_isbn=<?php echo $book['book_isbn']; ?>">Edit</a></td>
      <td><a href="?p=admin&c=Index&a=delete&book_isbn=<?php echo $book['book_isbn']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
  </table>
</div>