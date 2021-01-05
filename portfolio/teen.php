<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php
$content='
<h3 class="projh3" >Teen Titans Communicator</h3>
<!-- Images used to open the lightbox -->
            <div class="row">
                <div class="column">
                    <img src="images/TeenT/teent1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
                </div>
                <div class="column">
                    <img src="images/TeenT/IMG_05411.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
                </div>
            </div>

        <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">
                        
                        <div class="mySlides">
                            <div class="numbertext">1 / 2</div>
                                <img src="images/TeenT/teent1.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides">
                            <div class="numbertext">2 / 2</div>
                                <img src="images/TeenT/IMG_0541.jpg" style="width:100%">
                        </div>

                    <!-- Next/previous controls -->
                        <a class="Pprev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="Pnext" onclick="plusSlides(1)">&#10095;</a>

                    <!-- Caption text -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                    <!-- Thumbnail image controls -->
                        <div class="column">
                            <img class="demo" src="images/TeenT/teent1.jpg" onclick="currentSlide(1)" alt="From Show">
                        </div> 
                        
                        <div class="column">
                            <img class="demo" src="images/TeenT/IMG_0541.jpg" onclick="currentSlide(2)" alt="No Paint">
                        </div>
                </div>
            </div>
    <script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>';
include 'template/base.php';
?>