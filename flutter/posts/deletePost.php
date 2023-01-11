<?php
         
require '../../php/config.php';
require 'deletePostImages.php';

 
if($data_base){
    if(isset($_POST['postId'])){
        $postId=$_POST['postId'];
        $response =array();
        
        $postData=$data_base->prepare( "SELECT * FROM posts WHERE id='$postId'");
        $postData->execute();
        $postData=$postData->fetch();
        
        deleteImages($postData["img1"],
                    $postData["img2"],
                    $postData["img3"],
                    $postData["img4"],
                    $postData["img5"],);
    
        $deleteComments=$data_base->prepare( "DELETE FROM postsComments WHERE post_id='$postId'");
        $deleteComments->execute();
        
        $deleteLike=$data_base->prepare( "DELETE FROM postsLikes WHERE post_id='$postId'");
        $deleteLike->execute();

        $deletePost=$data_base->prepare( "DELETE FROM posts WHERE id='$postId'");
        $deletePost->execute();

        $response=["done"=>"done"];

         echo json_encode($response);
       
    }
   
}    
       

?>