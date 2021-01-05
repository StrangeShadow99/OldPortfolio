<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php
$content = '
        <div class="main" id="codec" style="text-align: center;">
            <h1>Codecademy</h1>
            <h3>What is it?</h3>
            <p>Codecademy is a free online service where people of any age can start learning how to code. Codecademy covers many languages from front end website languages to back end server side languages. For each language there are different levels of difficulty depending on how familiar you are with the language. In each lesson Codecademy has the student fill in pices of code, slowly making a fully functional program, then has the student make a program from scratch using what they have learned.</p>
            <h3>Classes I Have Completed</h3>
            <div>
            <div id="left_list">
                <ul>
                    <li>Responsive Design</li>
                    <li>Git</li>
                    <li>JavaScript</li>
                    <li>SQL</li>
                    <li>CSS</li>
                </ul>
            </div>
            <div id="right_list">
                <ul>

                    <li>Python</li>
                    <li>HTML</li>
                    <li>jQuery</li>
                    <li>Make a Website</li>
                </ul>
            </div>
            </div>
        </div> ';
       include 'template/base.php';
?>