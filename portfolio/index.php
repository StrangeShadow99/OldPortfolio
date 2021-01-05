<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php
$content = '<div class="home_Section" id="about">
                <h2>About me</h2>

                <div class="content">
                    
                    <h3 id="name">Nickolas Peter Kaley</h3>
                    <p>I was born on Feb 4, 1999 in Ohio, but I was raised in northern kentucky. In my free time I like to 
                    make websites, play video games, listen to music, hangout with friends, and make computers and props. I am currently enrolled in Northern Kentucky University College of Informatics. I am aiming to graduate with a major in Computer Information Technology, with a focus on Website Development and Networking, and a Minor in Japanese. I am currently employed at Center for Applied Informatics in NKU. From elementary to highschool I took martial arts at a school in Florence Ky called The Inner Circle. This school focused on Okinawan Kempo, Jeet Kune Do, and Wing Chun. In High school I joined a program called Kenton County Academies for Information and Technology where I learned how to present a project, be a project leader, and a base understanding of coding.
                    </p>
                    <p id="number">(859)640-2574</p>
                    <div id="profile">
                        
                        <a href="https://www.linkedin.com/in/nick-k-90a39b123/" class="social" id="linkdin_pro" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto:kaleyn1@mymail.nku.edu" class="social" id="gmail_pro"target="_blank" style="padding-right:10px;"><i class="far fa-envelope"></i></a>
                        <a href="tel:8596402574"class="social" id="phone_social"><i class="fas fa-phone-square" ></i></a>
                    </div>
                </div>
            </div>
            <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>
            <div class="moving" id="first"></div>
            <hr class="mobile_line">
            <!--Projects-->
            <div class="home_Section"  id="projects">
                <h2>Projects</h2>
                <div class="content">
                        <div class="proj proj_left"id="min_proj"><a href="Websites.php">
                            <h3>Websites</h3>
                        </a></div>
                        <div class="proj  proj_left" id="teen_proj"><a href="Props.php" >
                            <h3>Props</h3>
                        </a></div>
                </div>
            </div>
            <hr class="mobile_line">
            <div class="moving" id="second"></div>
            <!--Education-->
            <div class="home_Section homeSectionBorder"  id="eductaion_container">
                <h2>Education</h2>
                <div class="content">
                    <div class="slide_container">
                    <!-- Slideshow container -->
                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <div id="index_slide"style="width:100%"><a href="martial.php"><h3>Martial Arts</h3></a></div>
                            </div>

                            <div class="mySlides fade">
                                <div id="index_slide"style="width:100%"><a href="kcait.php"><h3 >KCAIT</h3></a></div>
                            </div>
                            
                            <div class="mySlides fade">
                                <div id="index_slide"style="width:100%"><a href="thomasM.php"><h3>Thomas More</h3></a></div>
                            </div>
                            
                            <div class="mySlides fade">
                                <div id="index_slide"style="width:100%"><a href="nku.php"><h3>NKU</h3></a></div>
                            </div>
                            
                            <div class="mySlides fade">
                                <div id="index_slide"style="width:100%"><a href="codec.php"><h3>Codecademy</h3></a></div>
                            </div>
                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <br>
                        </div>
                <!-- The dots/circles -->
                <div style="text-align:center" class="dots">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                    <span class="dot" onclick="currentSlide(5)"></span> 
                </div>
                </div>
                </div>    
            </div>
            <hr class="mobile_line">
            <div class="moving" id="third"></div>
            <!--Organization-->
            <div class="home_Section homeSectionBorder" id="organizations" name="organization">
                <h2>Organizations</h2>
                <div class="content">
                    <div class="org" id="minjas_Org"><div id="top_Org"><h3>MINjas</h3></div><div id="bottom_Org"><p>The MINjas are a student organization led by undergraduate scholars in the acclaimed College of Informatics here at Northern Kentucky University. We were founded in 2009 by Media Informatics undergraduate students. What started as a small group of friends expanded to a widely successful organization leading large-scale charity events like Press A to Give, a 24 hour gaming tournament with proceeds benefitting charities like Able Gamers and Childs Play.</p></div></div>
                    <div class="org" id="apo_Org"><div id="top_Org"><h3>ΑΦΩ</h3></div><div id="bottom_Org"><p> Alpha Phi Omega is a co-ed fraternity that focusses on service to the community by deonatinf time and effort to various organizations and causes.Alpha Phi Omega is the largest co-ed service fraternity in the world, with more than 256,000 members on 687 campuses across the nation.</p></div></div>
                    <div class="org" id="cai_Org"><div id="top_Org"><h3>CAI</h3></div><div id="bottom_Org"><p>The Center for Applied Informatics (CAI) is the outreach arm of NKU’s College of Informatics.  We draw upon student, staff, and faculty expertise from business informatics, computer science and communications to enhance student success.  The CAI also features a high-impact virtual co-op program, which engages students in informatics initiatives for organizations locally, regionally and nationally.</p></div></div>
                </div>
            </div>
            <hr class="mobile_line">
            <div class="moving" id="fourth"></div>
            <!-- Contact-->
            <div  class="home_Section homeSectionBorder" id="contact" name="contact">
                <h2>Contact Me</h2>
                <div class="content">
                <!-- contact form-->
                    <div id="contact_form">
                        <p>Email:Nkaley99@gmail.com</p>
                        <p>Phone:(859)640-2574</p>
                    </div>
                </div>
            </div>
        <script>
         //Slides      
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
  var dots = document.getElementsByClassName("dot");
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
}
         
</script>';
include 'template/base.php';
?>