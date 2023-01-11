<?php
require '../php/config.php';
require_once '../php/mail.php';
  
if($data_base){
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $token=$_POST['token'];

        $sql=$data_base->prepare( "SELECT * FROM token WHERE id_user='$id' AND
        token='$token' ");
        $sql->execute();

        if($sql->rowcount()>0){
            $response=["response"=>"exist"];
            echo json_encode($response);
        }
        else{
            $sql_insert=$data_base->prepare("INSERT INTO token (id_user, token) VALUES ('$id','$token')");
            if($sql_insert->execute()==true){
                $response=["response"=>"inserted"];

                    echo json_encode($response);
            }
        }
        
    }
   
}
    
?>