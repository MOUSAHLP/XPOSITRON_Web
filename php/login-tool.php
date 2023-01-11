<?php
    session_start();

    require 'config.php';

if($data_base){
if(isset($_POST['send'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql=$data_base->prepare( "SELECT * FROM users WHERE username='$username' and 
    password='$password'");
    $sql->execute();
    $sql=$sql->fetch(PDO::FETCH_ASSOC);
    if($sql){
        if(isset($_POST['checkbox'])){
            session_destroy();
            setcookie('username_cookie',$username ,time()+ 60*60*24*365*5, '/');
            //60*60*24*365*5
            setcookie('password_cookie', $password ,time()+ 60*60*24*365*5, '/');
            echo "<script>window.location.href='index.php'</script>";
        }
        else{
            $_SESSION['username_session']=$username;
            $_SESSION['password_session']=$password;
                echo "<script>window.location.href='index.php'</script>";
            exit();
        }
    }
    else{
        $not_found= "<style>
        .notfound{
            display:block;
        }
        </style>";
        $nf=true;
    } 
}
}
?>