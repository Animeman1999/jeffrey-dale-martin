<?php
/**
 * Created on PhpStorm.
 * User: Jeffrey Martin
 * Date: 5/3/2018
 * Time: 1:59 PM
 */
$PageTitle="About";

function customPageHeader(){?>
    <link href="css/about.css" rel="stylesheet" type="text/css">
<?php }

include("header.php");?>
    <div class="content">

        <img class="me" src="images/jeff.jpg">
        <div id="left-block">
            <p>Hello, my name is Jeffrey Martin. I graduated from Kalamazoo Community College with an Associates
                of Applied Science in Software Development and with a Certificate of Achievement as a
                Database Specialist. I completed both degrees with a 4.0 GPA.</p>
            <p>In this online portfolio there are examples of my award-winning software which demonstrate my abilities.
                I am well-rounded in the productions of software including; preliminary analysis,
                systems analysis, systems design, development, integration and testing, installation, deployment,
                maintenance, evaluation, and disposal of a product's life cycle. I have produced software products on various
                platforms, including, Windows, Linux, and Android operating systems using C#, Visual Basic, MVC, PHP, Laravel, Java,
                JavaScript, Ajax, jQuery, Android Studio, Python, Pascal, GOSU, HTML, and CSS.
            </p>
            <p>For more information feel free to contact me at jeff.martin.it@gmail.com or (810)922-2770.</p>
        </div>
    </div>
<?php	include("footer.php");?>