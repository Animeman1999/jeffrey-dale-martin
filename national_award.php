<?php
/**
 * Created on PhpStorm.
 * User: Jeffrey Martin
 * Date: 5/2/2018
 * Time: 3:23 PM
 */


$PageTitle="National Award";

function customPageHeader(){?>
    <link href="css/national_award.css" rel="stylesheet" type="text/css">
<?php }

include("header.php");?>
    <div  class="white" class="c">
        <div class="award_images" > <img  src="images/winning_aitp.jpg"><img  src="images/aitpBig.png"><img  src="images/certificate.jpg"></div>
    </div>
    <div class="water">

        <div class="w3-card font_messages">
            <h2 class="c">AITP Web Project Competition</h2>
            <h3>My Position</h3>
            <p>I was the scrum master of our winning team. I was responsible for facilitating meetings,
                removing impediments from the team, coaching team members, and being the primary contact for the client. In
                addition, I helped with the systems analysis, design, coding, testing, documentation, and implementation of
                the website. In addition, I trained USTA boys administrators and content providers on the use of the website.</p>
            <h3>Top 4 Team Results</h3>
            <ol>
                <li>Kalamazoo Valley Community College - USTA Boys</li>
                <li>University of Alaska at Anchorage - PETAL Alumnus</li>
                <li>Missouri Western State University - Lions Club</li>
                <li>Eastern Connecticut State University - Cold Nose, Warm Heart</li>
            </ol>
            <h3>Contest Sponsor</h3>
            <p>AITP is the Association of Information Technology Professionals. The 21st Annual AITP National Collegiate
                Conference & Career Fair was held in Chicago. The conference was
                attended by 677 people (456 students) from around the nation. </p>
            <h3>AITP Web Project Competition Overview</h3>
            <p>A 5 person web development team was formed from each school. Each team was required to find a
                non-profit organization and sign a contract to update or create a website. Teams
                had 7 months in which to complete the project. Each team submitted progress reports documenting
                their progress as they did the system analysis, design, and finally the implementation of the project.
                Teams were scored on their progress and the top 8 teams were invited for a final presentation of their
                project at the national convention.</p>
            <h3>Non-Profit Chosen</h3>
            <p>Our team chose the <a href="http://www.ustaboys.com" target="_blank">USTA Boys</a>, which is the United
                States Tennis Associations National Championship tournament for boys 18 and under held each year in
                Kalamazoo, Michigan. We created a website that is used to run the entire tournament, from registration,
                creating the draws, streaming games, displaying the results of the games, showing news articles, and
                much more. To help with monetization of the website, sponsor's banners are weighted for time displayed
                based upon sponsorship level. To view the winning website go to <a href="http://www.ustaboys.com"
                                                                                   target="_blank">ustaboys.com</a></p>

        </div>
    </div>
<?php	include("footer.php");?>