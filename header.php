<!doctype html>
<!--Jeffrey Martin
    Site about me.

    Header page to be added to all pages displayed.-->


<html>
<head>
    <meta charset="utf-8">
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }?>
</head>
<body class="color-gradient">
    <div class="center">This site was designed by Jeffrey Martin using PHP. It is running on Azure using a Dev/Test plan,
        so may be a bit slow.</div>
<!--    Navigation for the every page-->

    <div class="nav-container">
        <hr style="border: 1px solid crimson">
                <ul class="nav"><li><a id="home" href="index.php">Home</a></li>
                    <li><a id="about" href="about.php">About Me</a></li>
                    <li><a id="award" href="national_award.php">National Award</a></li>
                    <li><a id="projects" href="projects.php">Recent Projects</a></li>
                    <li><a id="resume" href="resume.php">Resume</a></li>
                <!--    <li><a id="contact" href="contact.php">Contact</a></li>   -->
                </ul>
    </div>
    <!--Used when testing CSS for window size


            <button class="testbutton" onclick="myFunction()">Inner Window Size</button>
            <p id="demo"></p>
            <script>
            function myFunction() {
                var w = window.innerWidth;
                var h = window.innerHeight;
                document.getElementById("demo").innerHTML = "Width: " + w + "<br>Height: " + h;
            }
            </script>

    --End Testing for size-->