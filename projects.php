<?php
/**
 * Created on PhpStorm.
 * User: Jeffrey Martin
 * Date: 5/3/2018
 * Time: 6:29 PM
 */

$PageTitle="Recent Projects";

function customPageHeader(){?>
    <link href="css/project.css" rel="stylesheet" type="text/css">
<?php }

include("header.php");?>
    <div  class="project water">
        <h2 class="c">Recent Projects</h2>
<!--
        <a href="https://www.guidewire.com/"target="_blank"> <img  class="card"  src="images/claimcenter.PNG"></a>
        <div class="claimcenter project-left-block" >
            <h4>ClaimCenter</h4>
            <p>ClaimCenter is part of the Guidewire insurance suite. It is a web based application that is used by
                insurance companies to pay claims.</p>
            <p>I worked on production support and on project work to add new features to ClaimCenter</p>
            <p>Site address:  <a href="https://www.guidewire.com/" target="_blank">www.guidewire.com/</a></p>
        </div>
-->
        <a href="http://ec2-3-137-220-48.us-east-2.compute.amazonaws.com/CS2010/final_project/index.php" target="_blank"
        > <img  class="card"  src="images/vacation.PNG"></a>
        <div class="vacation project-left-block" >
            <h4>Jeff and Lea's journey to Europe 2023</h4>
            <p>This site was created for a class assignment. It was created using PHP and is hosted on AWS.</p>
            <p>The site is a simple presentation site with limited functionality.</p>
            <p>Site address:  <a href="http://ec2-3-137-220-48.us-east-2.compute.amazonaws.com/CS2010/final_project/index.php" target="_blank">
                    amazonaws.com/CS2010/final_project/index.php</a></p>
        </div>

        <a href="http://www.leaffrey.com/" target="_blank"> <img  class="card"  src="images/codelibrary.png"></a>
        <div class="leaffrey project-left-block" >
            <h4>Leaffrey.com</h4>
            <p>This site is my ongoing project to create repository of code samples and project backlog. I am creating it with
                .NET Core 2.2 using Entity Frame work code first. The website and database is being hosted on Microsoft Azure.</p>
            <p>I use this mostly for planning and executing personal projects. It has the ability to create a project with
                user stories. I am able to create sprints for each project. In these sprints I can track who is working on the
                user stories and how long it takes them to complete.</p>
            <p>Site address:  <a href="http://www.leaffrey.com/" target="_blank">www.leaffrey.com/</a></p>
        </div>

        <a href="https://smartplanetsoftware.com/epg/"target="_blank"> <img  class="card"  src="images/epg.PNG"></a>
        <div class="epg project-left-block" >
            <h4>EPG</h4>
            <p>EPG (Emergency Preparedness Guide) is used for emergency planning of an organization, to alert the organization
            of an emergency, to help the users follow the plan in an emergency, and for schools reunification of students
                with parents after an emergency. It was created with the cooperation of school districts and first responders.</p>
            <p>I was hired as a full stack lead developer of for the creation of the EPG project. I created the epg website
                using Entity Framework code first. The website was used for administrative functions and user content creation
                portal. I also maintained the database and created the APIs used with the mobile app.</p>
            <p>Site address:  <a href="https://smartplanetsoftware.com/epg/" target="_blank">smartplanetsoftware.com/epg</a></p>
        </div>


        <a href="https://mwc3.org" target="_blank"><img class="card" src="images/mwc3.png"></a>
        <div class="project-left-block">
            <h4>Midwest Collegiate Computing Conference</h4>
            <p>With the demise of AITP NCC, four regional Universities and Colleges started up a new student computer
            conference. I was asked along with David Barnes to create the registration site for the conference. We
            used PHP with a laravel framework to create the registration site. </p>
            <p>The site allows for students to sign up for competitions and join teams. Admins then can check
                the teams in for the competition before the start of each competition. Each year more functionality has
            been added to the website.</p>
            <p>At the 2018 conference, I helped with judging the .NET competition..</p>
            <p>Site address:  <a href="https://mwc3.org" target="_blank">mwc3.org</a></p>
        </div>

        <a href="http://www.upjohn.org/promise/database/" target="_blank"><img  class="card"  src="images/upjohn_institute.png"></a>
        <div class="project-left-block upjohn" >
            <h4>W.E. Upjohn Institute for Employment Research</h4>
            <p>The Upjohn Institute plays a leading role in research and evaluation of place-based scholarship also known
            as promise scholarships. I was asked to help in the creation of a website that is used to view their research by
            the media, policymakers, and members of the public.</p>
            <p>I was asked to join website development team to create the JavaScript for the functionality of the front end of
            the website. My role was expanded to include doing the backend of the website in retrieving the data using PHP.</p>
            <p>Our group successfully met the deadline for debuting the website to Rick Snyder the Governor or Michigan before
            the 9th annual PromiseNet conference held on November 6-7 2017. Currently I am helping with updating the website
            and adding more features.</p>
            <p>Site address:  <a href="http://www.upjohn.org/promise/database/" target="_blank">www.upjohn.org/promise/database/</a></p>
        </div>

        <a href="https://ustaboys.com/" target="_blank"><img  class="card"  src="images/ustaboys.png"></a>
        <div class="ustaboys project-left-block" >
            <h4>USTA Boys' 18 & 16 National Championship</h4>
            <p>For 75 years the USTA Boys' 18 & 16 National Championships have taken place Kalamazoo, Michigan. This tournament
                is the single most important event for juniors tennis players in the United States. Ten days of intense tennis earn
                for each of the ultimate winners in singles and doubles the cherished title of United States National Champion. In
                addition the 18s Champions in Singles and Doubles winners receive an automatic bid to the main draw of the prestigious
                U.S. Open Tournament.</p>
            <p>I was the scrum master of the web development team that created the all new website and database used by the
            USTA Boys to run their tournament. My duties not only included the traditional duties of a scrum master, but I helped
            and filled in all the rolls on the scrum team as needed, as well as wrote the user manual and trained the
            website admins in its use. Currently I am the Site Administrator. </p>
            <p>The project was completed on time for its use during the tournament held in 2016. The website also won the
                <a href="national_award.php">2016 AITP Web Project Competition.</a></p>
            <p>Site address:  <a href="https://ustaboys.com/" target="_blank">ustaboys.com</a></p>
        </div>

    </div>
<?php	include("footer.php");?>