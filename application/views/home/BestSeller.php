<!-- Slideshow container -->
<div>Most popular</div>
<div class="slideshow-container">

  <?php
  foreach ($bookList as $book) {
    echo '<div class="mySlides fade">';
    echo '<img src="data:image/jpg;charset=utf8;base64,' . base64_encode($book['book_image']) . '" style="width:50%">';
    echo '<div class="text">' . $book['book_title'] . '</div></div>';
  }
  ?>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>