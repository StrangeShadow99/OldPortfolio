<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php
$content='
<h3 class="projh3" >Halo Reach Magnum</h3>
        <!-- Images used to open the lightbox -->
            <div class="row">
                <div class="column">
                    <img src="images/Halo/mg6side.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
                </div>
                <div class="column">
                    <img src="images/Halo/1.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
                </div>

                <div class="column">
                    <img src="images/Halo/2.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
                </div>

                <div class="column">
                    <img src="images/Halo/3.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
                </div>

                <div class="column">
                    <img src="images/Halo/4.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
                </div>
            </div>

        <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">
                        
                        <div class="mySlides">
                            <div class="numbertext">1 / 5</div>
                                <img src="images/Halo/mg6side.png" style="width:100%">
                        </div>
                        
                        <div class="mySlides">
                            <div class="numbertext">2 / 5</div>
                                <img src="images/Halo/1.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides">
                            <div class="numbertext">3 / 5</div>
                                <img src="images/Halo/2.jpg" style="width:100%">
                        </div> 

                        <div class="mySlides">
                            <div class="numbertext">4 / 5</div>
                                <img src="images/Halo/3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 5</div>
                                <img src="images/Halo/4.jpg" style="width:100%">
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
                            <img class="demo" src="images/Halo/mg6side.png" onclick="currentSlide(1)" alt="From Game">
                        </div> 
                        
                        <div class="column">
                            <img class="demo" src="images/Halo/1.jpg" onclick="currentSlide(2)" alt="No Paint">
                        </div>

                        <div class="column">
                            <img class="demo" src="images/Halo/2.jpg" onclick="currentSlide(3)" alt="first coat of paint">
                        </div>

                        <div class="column">
                            <img class="demo" src="images/Halo/3.jpg" onclick="currentSlide(4)" alt="pre weathering">
                        </div>

                        <div class="column">
                            <img class="demo" src="images/Halo/4.jpg" onclick="currentSlide(5)" alt="pre weathering">
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