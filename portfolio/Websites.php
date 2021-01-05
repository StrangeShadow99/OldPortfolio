<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php
$content ="
<h3 class='head' >Websites</h3>
<div class='row'>
    <div class='column'>
        <a href='Projects/academy/index.html' class='websiteName'>KCAIT<img scr='images/ninja.png'></a>
    </div>
    <div class='column'>
        <a href='Projects/minjaswebsite/index.html'class='websiteName'>Minjas<img scr='images/ninja.png'></a>
    </div>
</div>
";
include 'template/base.php';?>