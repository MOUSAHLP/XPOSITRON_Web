<?php

    $user_like=100;
    $user_love=100;
    $user_hard=100;
    
    if(isset($_POST['like'])){
        $user_like=$_POST['like'];
    }
    if(isset($_POST['love'])){
        $user_love=$_POST['love'];
    }
    if(isset($_POST['hard'])){
        $user_hard=$_POST['hard'];
    }

    function post($subject , $id ,$arabname,$user_like,$user_love,$user_hard){
    require '../php/config.php';
    $succeeded="not done";


        if($user_like!=100){
            $like=$data_base->prepare("SELECT * FROM statistics WHERE user_id ='$id' AND subject ='$subject'" );
            $like->execute();
            if($like->rowcount()==0){
                $like_insert=$data_base->prepare("INSERT INTO `statistics` ( `user_id`, `subject`, `arab-name`, `is_like`) VALUES ( '$id', '$subject', '$arabname', '$user_like');");
               if($like_insert->execute()){
                    $succeeded="done";
               } 
            }
            elseif($like->rowcount()==1){
                $like_update=$data_base->prepare("UPDATE statistics SET is_like='$user_like' WHERE user_id ='$id' AND subject = '$subject' ");
                if($like_update->execute()){
                    $succeeded="done";

                }
            }
             $like=$data_base->prepare("SELECT * FROM statistics WHERE  subject ='$subject' AND is_like='1'" );
            $like->execute();
           $subjectCount= $like->rowcount();
           
           $subjectCount_update=$data_base->prepare("UPDATE subjects SET likes='$subjectCount' WHERE  subjectName ='$subject'");
           $subjectCount_update->execute();
           
        }

        if($user_love!=100){
            $love=$data_base->prepare("SELECT * FROM statistics WHERE user_id ='$id' AND subject ='$subject'" );
            $love->execute();
            if($love->rowcount()==0){
                $love_insert=$data_base->prepare("INSERT INTO `statistics` ( `user_id`, `subject`, `arab-name`, `love_percentage`) VALUES ( '$id', '$subject', '$arabname', '$user_love');");
                if($love_insert->execute()){
                    $succeeded="done";

                }
            }
            elseif($love->rowcount()==1){
                $love_update=$data_base->prepare("UPDATE statistics SET love_percentage='$user_love'  WHERE user_id ='$id' AND subject = '$subject'");
                if($love_update->execute()){
                    $succeeded="done";

                }
            }
             $love=$data_base->prepare("SELECT AVG(love_percentage) FROM statistics WHERE subject='$subject'" );
            $love->execute();
             $love=$love->fetch(PDO::FETCH_ASSOC);

           $loveAvg=$love['AVG(love_percentage)']*10;
           
           $loveAvg_update=$data_base->prepare("UPDATE subjects SET loves='$loveAvg' WHERE  subjectName ='$subject'");
           $loveAvg_update->execute();
           
        }

        if($user_hard!=100){
            $hard=$data_base->prepare("SELECT * FROM statistics WHERE user_id ='$id' AND subject ='$subject'" );
            $hard->execute();
            if($hard->rowcount()==0){
                $hard_insert=$data_base->prepare("INSERT INTO `statistics` ( `user_id`, `subject`, `arab-name`, `hard_percentage`) VALUES ( '$id', '$subject', '$arabname', '$user_hard');");
                if($hard_insert->execute()){
                    $succeeded="done";

                }
            }
            elseif($hard->rowcount()==1){
                $hard_update=$data_base->prepare("UPDATE statistics SET hard_percentage='$user_hard' WHERE user_id ='$id' AND subject = '$subject'");
                if($hard_update->execute()){
                    $succeeded="done";

                }
                
            }
             $hard=$data_base->prepare("SELECT AVG(hard_percentage) FROM statistics WHERE subject='$subject'" );
            $hard->execute();
             $hard=$hard->fetch(PDO::FETCH_ASSOC);

           $hardAvg=$hard['AVG(hard_percentage)']*10;
           
           $hardAvg_update=$data_base->prepare("UPDATE subjects SET hards='$hardAvg' WHERE  subjectName ='$subject'");
           $hardAvg_update->execute();
        }
         $response=["succeeded"=>"$succeeded",];
            echo json_encode($response);
    };
    if(isset($_POST['user_id']) || isset($_POST['subject'])){
        post($_POST['subject'],$_POST['user_id'],$_POST['arab-name'],$user_like,$user_love,$user_hard);
    }
    // $arab="رياضيات1";
    // post("math1",3,$arab,0,2,1);
 
    
?>