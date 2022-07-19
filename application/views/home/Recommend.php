<div>Recommend</div>
<div>
  <?php
  for ($i = 0; $i < $recommendSize; $i++) {
    if ($i % 4 == 0) echo '<div class="row">';
    echo '<div class="column">' . $i . '</div>';
    if ($i % 4 == 3 | $i == $recommendSize - 1) echo '</div>';
  }

  ?>
</div>