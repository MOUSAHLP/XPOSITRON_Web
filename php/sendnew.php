<?php
require_once 'mail.php';
require 'config.php';
// require 'waiting.php';
$msg = 'dsdc';
if (isset($_COOKIE["username_cookie"])) {
    $msg = $_COOKIE["username_cookie"];
} elseif (isset($_SESSION["username_session"])) {
    $msg = $_SESSION["username_session"];
} elseif (isset($_POST["name-contact-us"])) {
    $msg = $_POST["name-contact-us"];
}


    $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
    $mail->addAddress("eesamousa2000@gmail.com");
    $mail->Subject = 'تم أرسال الرسالة التي أرسلتها الى 
                                X-POSITRON';
    $mail->Body    = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="../css/mail.css">
            <title>Document</title>
            <style type="text/css">
        .container{
            background-color: #0094ff;
            margin: 0px;
            
            height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
        }
        .p{
            line-height: 2;
            width: 100%;
            font-size: 25px;
            text-align: center;
            color: lightblue;
            margin: 0px;
            margin-bottom: -60px;
        }
        strong{
            font-family:serif;
            color: gold;
            width: 100%;
            font-size: 45px;
            margin: 10px auto;
        }
        </style>
        </head>
        <body>
            <div class="container">
            <p style="margin-top:50px">
                
                <p class="p">شكرا لتواصلك معنا يا 
                <br>
                ' . $msg . '
                </p>
                 <br>
                 <p class="p">
                    نقدر ارائك وسناخذ رسالتك بعين الاعتبار 
                 <br>
                 فريقك المخلص
                 <br>
               
                 <strong>X-POSITRON</strong>
                 <br>
                 </p>            
            </p>
            </div>
        </body>
        </html>';


    // move_uploaded_file($_FILES['img']['tmp_name'],"files/".$_FILES['img']['name']);
    // $mail->addAttachment('localhost/app/img.png','img.png'); 
    // $mail->addAttachment("files/".$_FILES['img']['name']);

    $mail->send();
    $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
    $mail->addAddress('eesamousa2000@gmail.com');
    $mail->Subject = 'from : ';

    $mail->Body    = 'name : ';
   
    $mail->send();
    // if ($data_base) {

    //     $email = $_POST['email-contact-us'];
    //     $message_body = $_POST['text-contact-us'];
    //     $date = Date("y:m:d");
    //     $from = "web";
    //     $state = 0;

    //     $message = $data_base->prepare("INSERT INTO messages (username, email,date,message ,src, state)
    //         VALUES ('$msg' ,  '$email' ,  '$date' , '$message_body', 'web' ,'$state')");


    //     $message->execute();
    // }
