<?php
///subscribe form
$recipient = "greatgreen55445@gmail.com"; ///  Your Email address
if (isset($_POST['email'])) {
    //Send Mail To Webmaster
    $email = $_POST['email'] ;
    $subject = 'New Subscriber';
    $message =  $email . ' has been subscribed to your website.';
    mail("$recipient", $subject, $message, "From:" . $recipient);
}
header('Location: http://greatgreen55445@gmail.com ');

?>