<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

 

require  __DIR__ . '/../vendor/autoload.php';

// if ($_SERVER["REQUEST_METHOD"] === "POST")
// {
      try {
            //code...
   
      $fname= trim($_POST["FirstName"]);
      $lname= trim($_POST["LastName"]);
      $email= trim($_POST["email"]);
      $phone= trim($_POST["phone"]);
      $desc= trim($_POST["website"]);
      $desc= trim($_POST["size"]);
      $desc= trim($_POST["pVolume"]);
      $desc= trim($_POST["products"]);
      $desc= trim($_POST["optional"]);
      

    //PHPMailer Object

    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

 

    //From email address and name

    $mail->From = "ask@payswitch.com.gh";

    $mail->FromName = "PaySwitch Ghana";



    $mail->isSMTP();

    $mail->CharSet = "utf-8";

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';

    $mail->Host = 'mail.payswitch.com.gh';

    $mail->Port = 465;

    $mail->SMTPOptions = array(

          'ssl' => array(

                'verify_peer' => false,

                'verify_peer_name' => false,

                'allow_self_signed' => true

          )

    );

    /* Username (email address). */

    $mail->Username = 'ask@payswitch.com.gh';



    /* Google account password. */

    $mail->Password = 'P@$$w0rd@2023@0.';



    /* Reply to the address if need be */

    //  $mail->AddReplyTo( $email, 'Reply to '.'ADMIN');

    /* Set the mail sender. */

    $mail->setFrom('ask@payswitch.com.gh', 'PaySwitch Ghana');



    //To address and name

    // $mail->addAddress("recepient1@example.com", "Recepient Name");

    $receiverEmail = getenv("RECEIVER_EMAIL");

    $mail->addAddress("ask@payswtich.com.gh"); //Recipient name is optional

    // $mail->addAddress($me); //Recipient name is optional



    //Address to which recipient will reply

    $mail->addReplyTo("no-reply@payswitch.com", "Reply");



    //CC and BCC

//     $mail->addCC("cc@example.com");

//     $mail->addBCC("bcc@example.com");



    //Send HTML or Plain Text email

    $mail->isHTML(true);



    $mail->Subject = "Contact Sales Form";

    $mail->Body = <<<BDY
      <!DOCTYPE html>
      <html lang="en">
      <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Your Email Title</title>
      <style>
            body {
                  margin: 0;
                  padding: 0;
                  font-family: Arial, sans-serif;
            }
            .container {
                  background-color: #f8f8f8;
                  padding: 20px;
            }
            .header-logo {
                  display: block;
                  max-width: 100%;
                  height: auto;
                  margin: 0 auto;
            }
            .content {
                  padding: 20px;
            }
            .footer-image {
                  display: block;
                  max-width: 100%;
                  height: auto;
                  margin: 0 auto;
            }
      </style>
      </head>
      <body>

      <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
            
            <tr>
                  <td class="container content">
                  <h1>Contact Sales Support(PaySwitch Website)</h1>
                  <p>Customer Name: {$fname} {$lname}</p>
                  <p>Phone: {$phone}</p>
                  <p>Email: {$email}</p>
                  <p>Company Website: {$website}</p>
                  <p>Company Size: {$size}</p>
                  <p>Payment Volume: {$pVolume}</p>
                  <p>Product(s) Customer wants: {$products}</p>
                  <p>Additional Message (Optional): {$optional}</p>

                  </td>
            </tr>
            
      </table>

      </body>
      </html>

    BDY;

    // $mail->AltBody = $body;
    
    $mail->send();

    $appUrl = getenv("APP_URL");

    header('Location: '.$appUrl.'/thankyou.php');

 
} catch (\Throwable $th) {
      header("Location: error_page.php");
    exit;
}
    // }

