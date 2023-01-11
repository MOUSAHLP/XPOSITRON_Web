<?php
         
require '../php/config.php';
  
if($data_base){
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    
        $getUserData=$data_base->prepare( "SELECT * FROM users WHERE id='$id'");
        $getUserData->execute();
        $getUserData =  $getUserData->fetch();
        $userImage = $getUserData["userImage"];
       
         echo json_encode(["userImage" => $userImage]);
       
    }
   
}    
       

?>