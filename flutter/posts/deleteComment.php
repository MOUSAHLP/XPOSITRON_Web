<?php
         
require '../../php/config.php';
  
if($data_base){
    if(isset($_POST['commentId'])){
        $postId=$_POST['postId'];
        $commentId=$_POST['commentId'];
        $response =array();
    
        $deleteComments=$data_base->prepare( "DELETE FROM postsComments WHERE id='$commentId'");
        $deleteComments->execute();


         // to update the likes in posts table
         $comments=$data_base->prepare("SELECT * FROM postsComments WHERE post_id='$postId' " );
         $comments->execute();
         $commentsCount= $comments->rowcount();
           
         $postsComments_update=$data_base->prepare("UPDATE posts SET comments='$commentsCount' WHERE  id ='$postId'");
         $postsComments_update->execute();




        $response=["done"=>"done"];

         echo json_encode($response);
       
    }
   
}    
       

?>