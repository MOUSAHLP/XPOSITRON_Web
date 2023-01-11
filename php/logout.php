<?php
require 'config.php';

session_start();
if($data_base){
    if (isset($_COOKIE['username_cookie'])) {
        setcookie('username_cookie','',time() - 3600 ,'/');
        echo "<script>window.location.href='../index.php'</script>";
    }
    elseif (isset($_SESSION['username_session'])) {
       session_unset();
       session_destroy(); 
       echo "<script>window.location.href='../index.php'</script>";
    }
    else{
        // echo "<script>window.location.href='../index.php'</script>";
    }

}
require 'waiting.php';
?>