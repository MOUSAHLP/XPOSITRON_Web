<?php
         
require '../../php/config.php';
require '../notification.php';
  
if($data_base){
    if(isset($_POST['userId'])){
    $response =array();

        $userId=$_POST['userId'];
        $postId=$_POST['postId'];
        $comment=$_POST['comment'];
        date_default_timezone_set("Asia/Damascus");
        $date= 
        strval(Date("Y-m-d H:i:s"));

        $setComment=$data_base->prepare( "INSERT INTO postsComments ( `user_id`, `post_id`, `date`,`comment`) VALUES ( '$userId', '$postId', '$date','$comment')");
        $setComment->execute();
        
        
        // to update the likes in posts table
        $comments=$data_base->prepare("SELECT * FROM postsComments WHERE post_id='$postId' " );
        $comments->execute();
        $commentsCount= $comments->rowcount();
          
        $postsComments_update=$data_base->prepare("UPDATE posts SET comments='$commentsCount' WHERE  id ='$postId'");
        $postsComments_update->execute();
      

        $userData=$data_base->prepare( "SELECT * FROM users WHERE id='$userId'");
        $userData->execute();
        $userData=$userData->fetch();
        
        // to send a notification
        $postOwner=$data_base->prepare( "SELECT * FROM posts WHERE id='$postId'");
        $postOwner->execute();
        $postOwner=$postOwner->fetch();
        $postOwnerId= $postOwner["id_user"];
        
        $postUserToken=$data_base->prepare( "SELECT * FROM token WHERE id_user='$postOwnerId'");
        $postUserToken->execute();
        // $postUserToken=$postUserToken->fetch();
        foreach($postUserToken as $token){
            
            if($token["id_user"] != $userId){
                
              sendGCM(998,
                $userData["username"]." تم التعليق على منشورك من قبل ",
               "\n "."$comment",
                "",
                $token["token"]);
            }
        }

        $response =["user_id"=>$userId,
        "post_id"=>$postId,
        "date"=>$date,
        "comment"=>$comment,
        "username"=>$userData["username"],
        "userImage"=>$userData["userImage"],
        "verified"=>$userData["verified"],];
             
            //  print_r($row);
            //  echo '<br><br><br><br><br><br><br><br>';
            
         echo json_encode($response);
       
    }
   
}    
       

?>