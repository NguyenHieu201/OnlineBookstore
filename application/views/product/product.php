<?php
include VIEW_PATH . DS . "layout" . DS . "header.php";
?>

<div class="card">
  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($book['book_image']); ?>" style="width:100%"
    alt="Book Name" />
  <?php
  echo "<h1>" . $book["book_title"] . "</h1>";
  echo '<p class="price">' . $book["book_price"] . '</p>';
  echo "<p>Some text about the jeans..</p>";
  echo "<p><button>Add to Cart</button></p>";
  ?>
</div>