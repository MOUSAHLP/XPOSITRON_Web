<?php 
require '../php/config.php';
require_once '../php/mail.php';
require_once 'notification.php';
require_once 'posts/deletePostImages.php';
 if($data_base){
     if(isset($_GET["id"]) && isset($_GET["action"])){
     $id = $_GET["id"];
     $action = $_GET["action"];
     $id_user = $_GET["id_user"];
     $userName = $_GET["userName"];
     $reason = $_GET["reason"];
     
    // getting all user`s tokens
    $tokens=$data_base->prepare("SELECT * FROM token");
    $tokens->execute();

     $actionArabic ="";
     if($action == "accepted"){
        $actionArabic ="تم قبول منشورك ";
        $reason = " تم أضافة منشورك بنجاح<br> وشكرا لاستخدامك <br>X-POSITRON";
        $accept=$data_base->prepare("UPDATE posts SET status=1 WHERE id ='$id' ");
        $accept->execute();

        // to send notification
        foreach($tokens as $token){
            if($token["id_user"] == $id_user){
                $msg =str_replace("<br>","",$reason);
                sendGCM(999,
                $actionArabic,
                $msg,
                "https://xpositronstore.000webhostapp.com/images/acceptPost.png",
                $token["token"]);
            }
            else{
             $msg =str_replace("<br>","",$reason);
            sendGCM(999,
            "منشور جديد",
            $userName." تم اضافة منشور جديد من قبل ",
            "",
            $token["token"]);
            }
        }
        
     }
     elseif($action == "rejected"){
         $actionArabic ="تم رفض منشورك ";
         
         $postDatatodeleteImg=$data_base->prepare("SELECT * FROM posts WHERE id ='$id' ");
         $postDatatodeleteImg->execute();
         $postDatatodeleteImg = $postDatatodeleteImg->fetch();
         
         deleteImages($postDatatodeleteImg["img1"],
                     $postDatatodeleteImg["img2"],
                     $postDatatodeleteImg["img3"],
                     $postDatatodeleteImg["img4"],
                     $postDatatodeleteImg["img5"]);
        
        $rejected=$data_base->prepare("DELETE FROM posts WHERE id ='$id' ");
        $rejected->execute();
        
        
        // to send notification
       foreach($tokens as $token){
        if($token["id_user"] == $id_user){
        
                 $msg =str_replace("<br>","",$reason);
                sendGCM(999,$actionArabic,$msg,"https://xpositronstore.000webhostapp.com/images/rejectPost.png",$token["token"]);
            }}
        }
     if($_GET["email"] != ""){

            // to send a msg
            $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
            $mail->addAddress($_GET["email"]); 
            $mail->Subject = $actionArabic;

            $mail->Body    =  '
                            <!DOCTYPE html>
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
                                    
                                    <p class="p"> 
                                    ' . $actionArabic . '
                                    </p>
                                    <br>
                                    <p class="p">
                                    ' . $reason . '
                                    <br>
                                    فريقك المخلص
                                    <br>
                                
                                    <strong>X-POSITRON</strong>
                                    <br>
                                    </p>            
                                </p>
                                </div>
                            </body>
                            </html>
            ';
            $mail->send();
        }
    }
    $allPosts=$data_base->prepare("SELECT * FROM posts WHERE status ='0' ");
    $allPosts->execute();
    // $allPosts=$allPosts->fetch();
    echo '<!DOCTYPE html>

    <html lang="ar" >
    
    <head>
        <meta charset="UTF-8" />
        <meta name="Keywords" content="X-POSITRON , xpositron , syria , damascus ,ece , university,syria university ,damascus university ,comunication , hamak , همك ,الاتصالات,دورات, هندسة الأتصالات , سوريا , دمشق ,كلية الهمك , مواد الهمك ,مواد هندسة الاتصالات , قسم هندسة الاتصالات , جامعة دمشق , شرح مواد, جامعة,الجامعة,اول يوم جامعة,اول يوم جامعه,جامعه,جامعة عريقة,جامعة قديمة,جامعات,جامعة زالنجي,جامعة تاريخية,جامعة المنصورة,طلاب جامعة زويل,شنطة الجامعة,فلوق الجامعة,أيام الجامعة,أول يوم جامعة!,منح جامعة امريكا,حقيبة الجامعة,نصائح للجامعة,يوم في الجامعة,أول يوم جامعة في دبي,مشترياتي للجامعة">
        <meta name="author" content="EM Industry">
        <meta name="description" content="موقع لشرح مواد قسم هندسة الاتصالات و الالكترونيات وتحميل المحاضرات و الدورات و مساعدة الطلاب">
        <meta property="og:title" content="X-POSITRON">
        <meta property="og:description" content="موقع لشرح مواد قسم هندسة الاتصالات و الالكترونيات وتحميل المحاضرات و الدورات و مساعدة الطلاب">
        <meta property="og:image" content="images/positron2.png">
        <meta property="og:image:width" content="600">
        <meta property="og:image:height" content="315">
        <link rel="stylesheet" href="tesr.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/positron2.png" type="image/png" />
        <link rel="icon" href="images/positron2.png" type="image/png" />
        <link rel="shortcut" href="images/positron2.png" type="image/png" />
        <link rel="apple-touch-icon" href="images/positron2.png" type="image/png" />
        <title>X-POSITRON-postsDashBoard</title>
        <style type="text/css">
        .post{
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            align-items: center;
            padding: 20px 5px;
            background-color: aliceblue;
            border-radius: 20px;
        }
        .post .information ,.userData{
            display: flex;
            width: 100%;
            align-content: stretch;
            justify-content: space-evenly;
            align-items: center;
        }
        .post .information .type{
            background-color: #10cab7;
            padding: 10px;
            border-radius: 10px;
            color: white;
        }
        .post .text{    
            padding: 20px;
            direction: rtl;
            font-size: 18px;
            font-weight: 700;
        }
        .post .images{
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: nowrap;
            align-items: center;
            overflow-x: scroll;
            height: 300px;
            width: 100%;
        }
        .post .images img{
            height: 100%;
            width: 50%;
            margin: 0 10px;
        }

        .post form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

       .post form textarea {
            outline: none;
            border: none;
            width: 70%;
            height: 50px;
            border-bottom: 4px solid #0094ff;
            background: rgba(0 0 0 /0.7);
            font-size: 16px;
            color: white;
            padding-right: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            direction: rtl;
            padding: 10px;
        }
        .post form textarea::placeholder {
            color: white;
        }
        .post form textarea:focus {
            height: 120px;
        }
        
        .post .action{
            display: flex;
            flex-direction: row;
            width: 100%;
            align-content: space-around;
            justify-content: space-between;
            padding: 20px;
        }
        
        .post .action button[type = "submit"]{
            text-decoration: none;
            border: none;
            color: white;
            flex-basis: 43%;
            font-size: 24px;
            background-color: #10cab7;
            border-radius: 15px;
            display: flex;
            align-items: center;
            text-align: center;
            flex-direction: row;
            justify-content: center;
            padding: 10px;
            cursor: pointer;
            transition-duration: 0.5s;
        }
        
    </style>
       
    
    </head>
        <body>';
    foreach ($allPosts as $post) {

        $userName =$post["id_user"];
        
        $user=$data_base->prepare('SELECT * FROM users WHERE id = "'.$userName.'" ');
        $user->execute();
        $user=$user->fetch();

        $images ='';
        for($i = 1 ; $i <= 5 ; $i++){

            if($post["img".strval($i)] != ""){
                $images = $images .'<img src = "'.$post["img".strval($i)].'   ">';
            }
        }
        

        echo '
                <div class="post">
                <div class="userData">
                        <span> id = '.$user["id"].'   </span>
                        <span> username = '.$user["username"].'   </span>
                        <span> email = '.$post["email"].'   </span>
                    </div>
                    <div class="information">
                        <span>'.$post["id"].'   </span>
                        <span class="type">'.$post["type"].'   </span>
                        <span>'.$post["date"].'   </span>
                    </div>
                    <div class="text">
                        <p>
                           '.$post["text"].'                       
                        </p>
                    </div>
        
                    <div class="images">
                        '.$images.'
                    </div>
                    <form action="https://xpositron.000webhostapp.com/flutter/acceptPost.php" method="GET">
                        <textarea name="reason" placeholder="اكتب لماذا ستقبل أو سترفض المنشور "></textarea>
                        <input type="hidden" value="'.$post["id"].'" name="id">
                        <input type="hidden" value="'.$user["username"].'" name="userName">
                        <input type="hidden" value="'.$post["id_user"].'" name="id_user">
                        <input type="hidden" value="'.$post["email"].'" name="email">
                        <div class="action">
                            <button type="submit" name="action" value="rejected" style="background-color: #f44336;">رفض المنشور</button>
                            <button type="submit" name="action" value="accepted" >قبول المنشور</button>
                        </div>
                    </form>
                </div>
                <br><hr><br>
            ';
    }
    echo '</body>
    </html>';
     
     
     
 }
