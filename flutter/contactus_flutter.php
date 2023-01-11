<?php
require '../php/config.php';

if($data_base){
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $message_body=$_POST['message'];
        $date=Date("y:m:d");
        $from="app";
        $state=0;


        require_once '../php/mail.php';
        
        $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
        $mail->addAddress($email); 
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
                '.$username.'
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

        $mail->send();
        
        $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
        $mail->addAddress('eesamousa2000@gmail.com'); 
        $mail->Subject = 'from : '.$email;

        $mail->Body    = 'name : '.$username.'<br>'
                        .'from : '.$email.'<br>'.'
                        <br><br> message:'.$message_body;
        $mail->send();

            $message = $data_base->prepare( "INSERT INTO messages (username, email,date,message,src , state)
             VALUES ('$username' ,  '$email' ,  '$date' , '$message_body','app' ,'$state')");
            
            $message->execute();
            $response=["response"=>"send done"];
            echo json_encode($response);
        
        
    }
   
}
    
?>