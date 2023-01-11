<?php
     
require '../php/config.php';
require_once '../php/mail.php';
$url = "https://xpositronposts.000webhostapp.com/putImage.php";
$root ="https://xpositronposts.000webhostapp.com/postImages/";
  
if($data_base){
    if(isset($_POST['text']) || isset($_POST['name']) || isset($_POST['type'])){
       
       
        $id = $_POST['id'];
        $text = $_POST['text'];
        $username = $_POST['username'];
        $type = $_POST['type'];
        $email = $_POST['email'];
        date_default_timezone_set("Asia/Damascus");
        $date= 
        strval(Date("Y-m-d H:i:s"));
    
        $img1 ="";
        if($_POST['img1']!=""){
            $img1= $root . $_POST['img1'];
        }
        $img2 ="";
        if($_POST['img2']!=""){
            $img2= $root . $_POST['img2'];
        }
        $img3 ="";
        if($_POST['img3']!=""){
            $img3= $root . $_POST['img3'];
        }
        $img4 ="";
        if($_POST['img4']!=""){
            $img4= $root . $_POST['img4'];
        }
        $img5 ="";
        if($_POST['img5']!=""){
            $img5= $root . $_POST['img5'];
        }
  
         
        $sql=$data_base->prepare("INSERT INTO posts (id_user, text,type,date,email
         ,img1,img2,img3,img4,img5
        )
         VALUES ('$id','$text','$type','$date','$email'
         ,'$img1','$img2','$img3','$img4','$img5'
         )");
      if($sql->execute()){

        $getid=$data_base->prepare( "SELECT * FROM posts WHERE id_user='$id' AND
        date='$date' ");
        $getid->execute();
        $getid=$getid->fetch();
        $postId=$getid['id'];
          
           // to send a msg
                    $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
                    $mail->addAddress('eesamousa2000@gmail.com'); 
                    $mail->Subject = $username.' منشور من قبل  ' ;
            
                    $mail->Body    = $username. ' تم اضافة منشور من قبل ' .'<br>'.
                                    'ينتظر المراجعة '.'<br><br>'.
                                    'Text : '. $text.'<br><br>'.
                                    'Type : '. $type.'<br><br>'.
                                    'Date : '. $date.'<br><br>'.
                                    'email : '. $email.'<br><br>'.
                                    'img1 : '. $img1.'<br><br>'.
                                    'img2 : '. $img2.'<br><br>'.
                                    'img3 : '. $img3.'<br><br>'.
                                    'img4 : '. $img4.'<br><br>'.
                                    'img5 : '. $img5.'<br><br><br><br>'.
                                    '<a href="https://xpositron.000webhostapp.com/flutter/acceptPost.php" style ="
                                    
                                    text-decoration: none;
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

                                    ">' . "التوجه للموقع" . '</a>'
                    ;
                    $mail->send();
                    
                        //   header('Content-Type: application/json');
         $response=["url"=>$url,];
         echo json_encode($response);
         
      }
   
   
    }
}
?>