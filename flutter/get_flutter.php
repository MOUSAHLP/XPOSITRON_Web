<?php
require '../php/config.php';
require_once '../php/mail.php';
  
if($data_base){
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $year=$_POST['year'];
        $date=Date("y:m:d");

        $sql=$data_base->prepare( "SELECT * FROM users WHERE username='$username' AND
        password='$password' ");
        $sql->execute();

        if($sql->rowcount()>0){
            $response=["response"=>"alredy exist"];
            echo json_encode($response);
        }
        else{
            $sql_insert=$data_base->prepare("INSERT INTO users (username, password,year,date,src) VALUES ('$username','$password','$year','$date','app')");
            if($sql_insert->execute()==true){
               
                   $userdata=$data_base->prepare( "SELECT * FROM users WHERE username='$username' AND
                  password='$password' ");
                  $userdata->execute();
                  $userdata=$userdata->fetch();
                  $UserDataId=$userdata['id'];
                  $UserDataName=$userdata['username'];
                  $UserDataPassword=$userdata['password'];
                  $UserDataYear=$userdata['year'];
                  $UserDataDate=$userdata['date'];
                  $response=["response"=>"Insert succeeded",
                  "id"=>"$UserDataId",
                  "username"=>"$UserDataName",
                  "password"=>"$UserDataPassword",
                  "year"=>"$UserDataYear",
                  "date"=>"$UserDataDate"];
                  
                  
                // to send a msg
                    $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
                    $mail->addAddress('eesamousa2000@gmail.com'); 
                    $mail->Subject = $UserDataName.' سجل دخول';
            
                    $mail->Body    = 'name : '.$UserDataName.'<br>'
                                    .'password : '.$UserDataPassword.'<br>'.'
                                    <br><br> year:'.$UserDataYear .'<br>'.'
                                    from App';
                    $mail->send();
                  
                  
                    echo json_encode($response);
            }
        }
        
    }
   
}
    
?>