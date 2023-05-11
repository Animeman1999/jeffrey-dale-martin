<?php
include_once "vendor/autoload.php";
/**
 * Created on PhpStorm.
 * User: Jeffrey Martin
 * Date: 5/7/2018
 * Time: 1:54 PM
 */
$PageTitle="Message";

function customPageHeader(){?>
    <link href="css/email.css" rel="stylesheet" type="text/css">
<?php }

include("header.php");?>
    <div class="content">

        <img  src="images/archive.jpg">
        <?php
            if(!empty($_POST)){
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
                    $phone = "None";
                    if(isset($_POST['phone'])){
                        if ($_POST['phone'] != ""){
                            $phone = $_POST['phone'];
                        }
                    }
                    //echo($_POST['name'].$_POST['email'].$_POST['message'].$phone);

                    $text = "From: ".$_POST['name']."\n".$_POST['email']."\n".$_POST['message']."\nPhone: ".$phone;
                    $html = "<html>
                       <head></head>
                       <body>
                           <p>From: ".$_POST['name']."<br>
                               ".$_POST['email']."<br>
                               ".$_POST['message']."<br>
                               Phone: ".$phone."
                           </p>
                       </body>
                       </html>";
                    // This is your From email address
                    $from = array('jeff.martin.it@gmail.com' => 'Jeffrey-Dale-Martin Website');
                    // Email recipients
                    $to = array(
                        'animeman1999@gmail.com'=>'Jeff Martin',
                        'jeff.martin.it@gmail.com'=>'Jeff Martin'
                    );
                    // Email subject
                    $subject = 'Resume Website message: '.$_POST['email'];

                    // Login credentials
                    $username = 'azure_dfdae9571803f3de1547119890a22b27@azure.com';
                    $password = 'gosharks#1';

                    // Setup Swift mailer parameters
                    $transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 587));
                    $transport->setUsername($username);
                    $transport->setPassword($password);
                    $swift = new Swift_Mailer($transport);

                    // Create a message (subject)
                    $message = new Swift_Message($subject);

                    // attach the body of the email
                    $message->setFrom($from);
                    $message->setBody($html, 'text/html');
                    $message->setTo($to);
                    $message->addPart($text, 'text/plain');


                    // send message
                    echo "<div id=\"left-block\"><h2>";
                    if ($recipients = $swift->send($message, $failures))
                    {
                        // This will let us know how many users received this message
                        echo 'Thank you for your message. Jeffrey Martin will reply as soon as possible.';
                    }
                    // something went wrong =(
                    else
                    {
                        echo "Sorry, but there was a problem sending your message. Try again later";
                    }




                    echo "</h2></div>";
                }
            }
        ?>


    </div>


<?php	include("footer.php");?>

<?php
//require_once 'vendor/autoload.php';
//
//// Create the Transport
//$transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 25))
//->setUsername('azure_dfdae9571803f3de1547119890a22b27@azure.com')
//->setPassword('gosharks#1')
//;
//
//// Create the Mailer using your created Transport
//$mailer = new Swift_Mailer($transport);
//
//// Create a message
//$message = (new Swift_Message('Wonderful Subject'))
//->setFrom(['jeff.martin.it@gmail.com' => 'John Doe'])
//->setTo(['animeman1999@gmail.com', 'other@domain.org' => 'A name'])
//->setBody('Here is the message itself')
//;
//
//// Send the message
//$result = $mailer->send($message);
//?>