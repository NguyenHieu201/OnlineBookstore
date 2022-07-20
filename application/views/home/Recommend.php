
<?php
require_once VIEW_PATH . "layout" . DS . "header.php";
linkHead(['column.css'])
?>
<h3>Recommend</h3>
<br>
<div class="recommend">
  <?php
  for ($i = 0; $i < $recommendSize; $i++) {
    if ($i % 4 == 0) echo '<div class="row">';
    // echo '<div class="column">' . $i . '</div>';
    echo '<img src="data:image/jpg;charset=utf8;base64,' . base64_encode($book['book_image']) . '" style="width:25%">';
    if ($i % 4 == 3 | $i == $recommendSize - 1) echo '</div>';
  }

  ?>
</div>
<hr>