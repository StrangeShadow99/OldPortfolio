<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" href="styles/style.css">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    
    </head>
    <body>
            <header>
                <a href="index.php"><h1 style="text-align: center;">Nickolas Kaley's Portfolio</h1></a>
            </header>
            <nav>
                <ul id="nav">
                    <li id="home_nav"><a 
                    <?php if ($page == 'index.php') {echo ' class="active"';}?> href="index.php"class="option">Home</a></li>
                    <li class="dropdown">
                        <a 
                        <?php 
                           if ($page == 'halo.php') {echo ' class="active" href="index.php"';}
                           elseif ($page == 'teen.php') {echo ' class="active" href="index.php"';}
                           elseif ($page == 'Websites.php') {echo ' class="active" href="index.php"';}
                           else{echo'href="#projects"';}
                           ?>
                           >Projects</a> 
                        </li>
                    <li class="dropdown">
                        <a 
                        <?php 
                           if ($page == 'martial.php') {echo ' class="active"';}
                           elseif ($page == 'kcait.php') {echo ' class="active" href="index.php"';}
                           elseif ($page == 'thomasM.php') {echo ' class="active" href="index.php"';}
                           elseif ($page == 'nku.php') {echo ' class="active" href="index.php"';}
                           elseif ($page == 'codec.php') {echo ' class="active" href="index.php"';}
                           else {echo'href="#eductaion_container"';}
                           ?>
                           >Education</a>
                    </li>
                    <li><a 
                    <?php if ($page == 'props.php') {echo ' class="active"';}?>href="props.php">props</a></li>
                    <li><a
                    <?php 
                    if ($page == 'index.php') {echo 'href="#organizations"';}
                    else {echo 'href="index.php"';}       
                    ?>
                    >Organizations</a></li>
                    <li><a 
                    <?php 
                    if ($page == 'index.php') {echo 'href="#contact"';}
                    else {echo 'href="index.php"';}       
                    ?>
                    >Contact</a></li>
                    <li><a href="Resume.pdf" target="_blank">Resume</a></li>
                </ul>
                
            <ul id="mobile_nav">
                <span class="navSideButton" style="color:white"><img src="./images/list.png" alt="navbutton"></span>
                <li><a href="index.php" id="active">Home</a></li>
                <hr>
                <li><a href="Websites.php">Websites</a></li>
                <li><a href="Props.php">Props</a></li>
                <hr>
                <li><a href="martial.php">MartialArts</a></li>
                <li><a href="kcait.php">KCAIT</a></li>
                <li><a href="thomasM.php">ThomasMore</a></li>
                <li><a href="nku.php">NKU</a></li> 
                <li><a href="codec.php">Codecademy</a></li> 
            </ul>
            <span class="navSideButton" style="color:white"><img src="./images/list.png" alt="navbutton"></span>
            </nav>
            <hr>
            <main>
            
            <?php echo $content; ?>
            
        </main>
        <footer>
            <div id="footer_links">
            <div id="footer_social">
                <h4>Social</h4>
                <div id="profile">
                    <p id="number">(859)640-2574</p>
                        <a href="https://www.linkedin.com/in/nick-k-90a39b123/" class="social" id="linkdin_pro" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto:kaleyn1@mymail.nku.edu" class="social" id="gmail_pro"target="_blank" style="padding-right:5px;"><i class="far fa-envelope"></i></a>
                        <a href="tel:8596402574"class="social"id="phone_social"><i class="fas fa-phone-square" ></i></a>
                    </div>
            </div>
            <div id="footer_nav">
                <div id="footer_ed">
                <h4>Education</h4>
                <ul>
                    <li><a href="martial.php">MartialArts</a></li>
                    <li><a href="kcait.php">KCAIT</a></li>
                    <li><a href="thomasM.php">ThomasMore</a></li>
                    <li><a href="nku.php">NKU</a></li>
                    <li><a href="codec.php">Codecademy</a></li>
                </ul>
                </div>
                <div id="footer_porj">
                <h4>Projects</h4>
                <ul>
                    <li><a href="Websites.php">Websites</a></li>
                    <li><a href="Props.php">Props</a></li>
                </ul>
                </div>
            </div>
            </div>
        </footer>
        
    </body>
    <script src="JavaScript/jquery-3.3.1.min.js"></script>
    <script>
        //Mobile nav
        $('.navSideButton').on('click',() => {
            $('#mobile_nav').toggle("slide");
                                       });
        
 window.onscroll = function() {scrollFunction()};
//keeps mobile nav still
function scrollFunction() {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        document.getElementById("mobile_nav").className = "scrolled_mobile";
        document.getElementById("mobile_nav").style.position = "fixed";
    } 
    else {
        document.getElementById("mobile_nav").className = "top_mobile";
        document.getElementById("mobile_nav").style.position = "absolute";
    }
}
//scroll to top button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
    </script>
</html>