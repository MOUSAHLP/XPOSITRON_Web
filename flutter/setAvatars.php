<?php
         
require '../php/config.php';
  
if($data_base){
    if(isset($_POST['id']) && isset($_POST['image'])){
    $response =array();

        $id=$_POST['id'];
        $image=$_POST['image'];
        
        
        $userData=$data_base->prepare( "SELECT * FROM users WHERE id='$id'");
        $userData->execute();
        $userData=$userData->fetch();
          
        $setImage=$data_base->prepare("UPDATE users SET userImage='$image' WHERE  id ='$id'");
        $setImage->execute();

       
    }
   
}    
       

?>