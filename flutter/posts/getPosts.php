<?php
         
require '../../php/config.php';
  
if($data_base){
    if(isset($_POST['send'])){
        $userId = $_POST['id'];
    $response =array();
    $body =array();
    $userLikes =array();
        $getPosts=$data_base->prepare( "SELECT * FROM posts WHERE status='1' ORDER BY id DESC");
        $getPosts->execute();
        
         while($row=$getPosts->fetch(PDO::FETCH_ASSOC)){
             
             $id = $row["id_user"];
             
             $userData=$data_base->prepare( "SELECT * FROM users WHERE id='$id'");
             $userData->execute();
             $userData=$userData->fetch();
             
             
             $row["username"] =$userData["username"];
             $row["userImage"] =$userData["userImage"];
             $row["verified"] =$userData["verified"];
             
             $images =array();
             for($i = 1 ; $i <= 5 ; $i++){
                 if($row["img".$i] != ""){
                      $images[] = $row["img".$i];
                 } 
                 
             }
             
             $row["image"] =$images;
              
             $body[]=$row;
             
            //  print_r($row);
            //  echo '<br><br><br><br><br><br><br><br>';
        }
         // to get all posts that user liked 
        $getUserLikes=$data_base->prepare( "SELECT * FROM postsLikes WHERE user_id='$userId' AND status='1'");
        $getUserLikes->execute();
        
         while($row=$getUserLikes->fetch(PDO::FETCH_ASSOC)){
             $userLikes[]=$row;
        }
         
        
        $response=["body"=>$body , "userLikes" =>$userLikes];
         echo json_encode($response);
       
    }
   
}    
       

?>