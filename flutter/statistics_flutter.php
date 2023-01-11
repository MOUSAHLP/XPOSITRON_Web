<?php
   $islike;
   $love_precentage;
   $hard_precentage;
   
  

   function get($subject,$user_id){
    require '../php/config.php';
    
    $is_like=$data_base->prepare("SELECT is_like FROM statistics WHERE is_like=1 AND subject='$subject'");
    $is_like->execute();
    $islike= $is_like->rowcount();

    $love=$data_base->prepare("SELECT AVG(love_percentage) FROM statistics WHERE subject='$subject'");
    $love->execute();
    $love=$love->fetch(PDO::FETCH_ASSOC);
    
    $love_precentage= $love['AVG(love_percentage)']/10;
    $love_precentage_center= $love['AVG(love_percentage)']*10;

    $hard=$data_base->prepare("SELECT AVG(hard_percentage) FROM statistics WHERE subject='$subject'");
    $hard->execute();
    $hard=$hard->fetch(PDO::FETCH_ASSOC);
   
    $hard_precentage= $hard['AVG(hard_percentage)']/10;
    $hard_precentage_center=$hard['AVG(hard_percentage)']*10;
    
    $is_voted=$data_base->prepare("SELECT * FROM statistics WHERE subject='$subject' AND user_id ='$user_id'");
    $is_voted->execute();
     $is_voted=$is_voted->fetch(PDO::FETCH_ASSOC);
    
    $isliked=$is_voted['is_like']/1;
    $userlove=$is_voted['love_percentage']/1;
    
    if($is_voted['love_percentage']==null){
        $userlove=$is_voted['love_percentage']/1;
    }else{
        $userlove=$is_voted['love_percentage']/1;
    }
    
    if($is_voted['hard_percentage']==null){
        $userhard=$is_voted['hard_percentage']/1;
    }else{
        $userhard=$is_voted['hard_percentage']/1;
    }
    
    
    
       $response=["subject"=>"$subject",
                  "likes"=>"$islike",
                  "love_precentage"=>$love_precentage,
                  "love_precentage_center"=>$love_precentage_center,
                  "hard_precentage"=>$hard_precentage,
                  "hard_precentage_center"=>$hard_precentage_center,
                  "isliked"=>$isliked,
                  "userlove"=>$userlove,
                  "userhard"=>$userhard,
                  ];
                  echo json_encode($response);
    };
    if(isset($_POST['subject'])||isset($_POST['user_id'])){
            get($_POST['subject'],$_POST['user_id']);
    }
    
        // get('math1',7);

?>