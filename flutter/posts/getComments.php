<?php
         
require '../../php/config.php';
  
if($data_base){
    if(isset($_POST['postId'])){
        $postId=$_POST['postId'];
        $response =array();
    
        $getComments=$data_base->prepare( "SELECT * FROM postsComments WHERE post_id='$postId' ORDER BY id DESC");
        $getComments->execute();
       
        while($row=$getComments->fetch(PDO::FETCH_ASSOC)){
             
            $id = $row["user_id"];
            
            $userData=$data_base->prepare( "SELECT * FROM users WHERE id='$id'");
            $userData->execute();
            $userData=$userData->fetch();
            
            
            $row["username"] =$userData["username"];
            $row["userImage"] =$userData["userImage"];
            $row["verified"] =$userData["verified"];
            
             
            $response[]=$row;
            
           //  print_r($row);
           //  echo '<br><br><br><br><br><br><br><br>';
       }
        
         echo json_encode($response);
       
    }
   
}    
       

?>