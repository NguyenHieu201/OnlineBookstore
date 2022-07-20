<?php
include_once VIEW_PATH . "layout" . DS . "header.php";
linkHead(["cart.css"]);
?>
<div class="itemcart">
  <div>
    <table>
      <tr>
        <td class="ha">
          Book Cover
        </td>
        <td class="sp">
          Book Title
        </td>
        <td class="dg">
          Price
        </td>
        <td class="sl"> Quantity</td>
      </tr>

      <?php
      for ($i = 0; $i < count($bookList); $i++) {
        echo '<tr class="item">';
        echo '<td class="img">';
        echo '<img src="data:image/jpg;charset=utf8;base64,' . base64_encode($bookList[$i]["book_image"]) . '"alt="BookCover">';
        echo '</td>';
        echo '<td class="name">' . $bookList[$i]["book_title"] . '</td>';
        echo '<td class="price">' . $bookList[$i]["book_price"] . 'd</td>';
        echo '<td class="soluong">';
        echo '<input class="slpicker" type="number" value="' . $quantity[$i] . '" min="1">';
        echo '</td>';
        echo '<td><Button>Delete</Button></td>';
        echo '</tr>';
      }
      ?>

    </table>
  </div>
  <div class="sidebar">
    <div class="totalnumber">
      Total: 130 000 d</div>
    <br></br>
    <button class="confirmation">
      Xac nhan thanh toan
    </button>

  </div>

</div>