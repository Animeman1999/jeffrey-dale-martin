<?php
/**
 * Created on PhpStorm.
 * User: Jeffrey Martin
 * Date: 5/4/2018
 * Time: 1:12 PM
 */
$PageTitle="Contact";

function customPageHeader(){?>
    <link href="css/contact.css" rel="stylesheet" type="text/css">
<?php }

include("header.php");?>
    <div class="content water">

        <div class="w3-card c">
            <h2>Contact Jeffrey Martin</h2>
            <form name="contact" action="email.php" method="post">

               <div>
    <!--                <label for="name">Full Name</label>-->
                    <input class="underline full-length" type="text" id="name" name="name" required placeholder="Full Name *">

               </div>

                <div>
                    <!--                <label for="email">Email Address *</label>-->
                    <input class="underline half-length" type="email" id="email" name="email" required placeholder="Email Address *">&nbsp;

<!--                <label for="phone">Flight Time</label>-->
                    <input class="underline half-length" type="text" id="phone" name="phone" placeholder="Phone Number">
                </div>

<!--                <label for="message">Write Your Message</label>-->


                <div><textarea class="full-length-height" type="text" id="message" name="message" required placeholder="Write Your Message"></textarea></div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
<?php	include("footer.php");?>