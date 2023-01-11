<?php
         
require '../../php/config.php';
require '../notification.php';
  
if($data_base){
    if(isset($_POST['userId'])){
        $userId=$_POST['userId'];
        $postId=$_POST['postId'];
        $status = -1;
    
        $getLikes=$data_base->prepare( "SELECT * FROM postsLikes WHERE user_id='$userId' AND post_id='$postId'");
        $getLikes->execute();
        if($getLikes->rowcount() > 0){
            $getLikes = $getLikes->fetch();
            $status = $getLikes["status"];
            if($status == 0){
                $status = 1;
            }
            else{
                $status = 0;
            }
            $setLikes=$data_base->prepare( "UPDATE postsLikes SET status='$status' WHERE user_id ='$userId' AND post_id='$postId' ");
            $setLikes->execute();
            
            
            
        }else{
            
            $insertLike=$data_base->prepare("INSERT INTO postsLikes ( `user_id`, `post_id`, `status`) VALUES ( '$userId', '$postId', '1')");
           $insertLike->execute();

        }
        
        // to update the likes in posts table
         $like=$data_base->prepare("SELECT * FROM postsLikes WHERE post_id='$postId' AND status='1'" );
         $like->execute();
         $likesCount= $like->rowcount();
           
         $postsCount_update=$data_base->prepare("UPDATE posts SET likes='$likesCount' WHERE  id ='$postId'");
         $postsCount_update->execute();
      
        // to send a notification
        $userData=$data_base->prepare( "SELECT * FROM users WHERE id='$userId'");
        $userData->execute();
        $userData=$userData->fetch();
        
        $postOwner=$data_base->prepare( "SELECT * FROM posts WHERE id='$postId'");
        $postOwner->execute();
        $postOwner=$postOwner->fetch();
        $postOwnerId= $postOwner["id_user"];
        
        $postUserToken=$data_base->prepare( "SELECT * FROM token WHERE id_user='$postOwnerId'");
        $postUserToken->execute();
        // $postUserToken=$postUserToken->fetch();
        foreach($postUserToken as $token){
            
        if($token["id_user"] != $userId &&
        $status !=-1&&
        $status ==1) {
            
          sendGCM(998,
            "تسجيل اعجاب جديد",
            $userData["username"]." تم التفاعل على منشورك من قبل ",
            "",
            $token["token"]);
        }
        }
             
            //  print_r($row);
            //  echo '<br><br><br><br><br><br><br><br>';
         echo json_encode(["response" =>"done"]);
       
    }
   
}    
       

?>