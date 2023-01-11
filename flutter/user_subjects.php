<?php
function user_subject($user_id){
    require '../php/config.php';
    
    $succeeded="dont";

    $response =array();
    $is_like =array();
    $is_love =array();
    $is_hard =array();


    $like=$data_base->prepare("SELECT * FROM statistics WHERE user_id='$user_id' ORDER BY is_like DESC,id ASC" );

    $love=$data_base->prepare("SELECT * FROM statistics WHERE user_id='$user_id' ORDER BY love_percentage DESC,id ASC" );

    $hard=$data_base->prepare("SELECT * FROM statistics WHERE user_id='$user_id' ORDER BY hard_percentage DESC,id ASC" );

    if( $like->execute()&&
        $love->execute()&&
        $hard->execute()){
        
         while($row=$like->fetch(PDO::FETCH_ASSOC)){
             $row =str_replace("<br>","\n",$row);
             
            if($row["love_percentage"]){
                $row["love_percentage"]/=1;
            } 
            if($row["hard_percentage"]){
                 $row["hard_percentage"]/=1;
             }
             if($row["love_percentage"]==0.0){
                $row["love_percentage"]+=0.00001/1;
            }
            if($row["hard_percentage"]==0.0){
                $row["hard_percentage"]+=0.00001/1;
            }
            
             $is_like[]=$row;
        }
        while($row=$love->fetch(PDO::FETCH_ASSOC)){
            $row =str_replace("<br>","\n",$row);
            
            if($row["love_percentage"]){
                $row["love_percentage"]/=1;
            } 
            if($row["hard_percentage"]){
                 $row["hard_percentage"]/=1;
             }
              if($row["love_percentage"]==0.0){
                $row["love_percentage"]+=0.00001/1;
            }
            if($row["hard_percentage"]==0.0){
                $row["hard_percentage"]+=0.00001/1;
            }
             $is_love[]=$row;
        }
        while($row=$hard->fetch(PDO::FETCH_ASSOC)){
            $row =str_replace("<br>","\n",$row);
            
            if($row["love_percentage"]){
                $row["love_percentage"]/=1;
            } 
            if($row["hard_percentage"]){
                 $row["hard_percentage"]/=1;
             }
              if($row["love_percentage"]==0.0){
                $row["love_percentage"]+=0.00001/1;
            }
            if($row["hard_percentage"]==0.0){
                $row["hard_percentage"]+=0.00001/1;
            }
             $is_hard[]=$row;
        }
        $succeeded="done";
    }
    $response=["succeeded"=>"$succeeded",
                "is_like"=>$is_like,
                "is_love"=>$is_love,
                "is_hard"=>$is_hard
        ];
    // echo $response["hards"][1]["hards"];
    //echo var_dump($response);
    echo json_encode($response);
}
    if(isset($_POST['id'])){
        user_subject($_POST['id']);
    }
    //  user_subject(27);
    

?>