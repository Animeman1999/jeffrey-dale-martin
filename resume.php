<?php
/**
 * Created on PhpStorm.
 * User: Jeffrey Martin
 * Date: 5/4/2018
 * Time: 8:47 AM
 */
$PageTitle="Resume";

function customPageHeader(){?>
    <link href="css/resume.css" rel="stylesheet" type="text/css">
<?php }

include("header.php");?>
    <div class="content">

        <img  src="images/pond.jpg">
        <div id="left-block">
            <h3>Select the image of the document to view my resume. To download my resume click
                <a href="images/jeffreymartinresume10.pdf" download>here</a>.</h3>
        </div>
        <div class="resume"><a href="images/jeffreymartinresume10.pdf" target="_blank"><img class="card" src="images/resume9.png"></a></div>
    </div>
<?php	include("footer.php");?>