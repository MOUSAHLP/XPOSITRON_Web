<?php
    require '../php/config.php';
    
    if($data_base){
        if(isset($_POST['username'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            
    
            $userdata=$data_base->prepare( "SELECT * FROM flutter WHERE username='$username' AND
            password='$password' ");
            $userdata->execute();
    
            if($userdata->rowcount()>0){
                
                $userdata=$userdata->fetch();
                $UserDataId=$userdata['id'];
                $UserDataName=$userdata['username'];
                $UserDataPassword=$userdata['password'];
                $UserDataYear=$userdata['year'];
                $UserDataDate=$userdata['date'];
                $response=["response"=>"alredy exist",
                "id"=>"$UserDataId",
                "username"=>"$UserDataName",
                "password"=>"$UserDataPassword",
                "year"=>"$UserDataYear",
                "date"=>"$UserDataDate"];
                echo json_encode($response);
            }
            else{
                $response=["response"=>"not found"];

                echo json_encode($response);
            
            }
            
        }
       
    }
        
    ?>
