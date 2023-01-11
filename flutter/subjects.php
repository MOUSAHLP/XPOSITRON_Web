<?php
function subject(){
    require '../php/config.php';
    
    $succeeded="dont";
    $response =array();
    $likes =array();
    $loves =array();
    $hards =array();


    $like=$data_base->prepare("SELECT * FROM subjects ORDER BY likes DESC,id ASC" );

    $love=$data_base->prepare("SELECT * FROM subjects ORDER BY loves DESC,id ASC" );

    $hard=$data_base->prepare("SELECT * FROM subjects ORDER BY hards DESC,id ASC" );

    if( $like->execute()&&
        $love->execute()&&
        $hard->execute()){
        
         while($row=$like->fetch(PDO::FETCH_ASSOC)){
              $row =str_replace("<br>","\n",$row);
              
               if($row["loves"]){
                $row["loves"]/=1.0;
            }
             if($row["hards"]){
                 $row["hards"]/=1.0;
             }
            if($row["loves"]==0.0){
                $row["loves"]+=0.00001/1;
            }
            if($row["hards"]==0.0){
                $row["hards"]+=0.00001/1;
            }
             $likes[]=$row;
             
        }
        while($row=$love->fetch(PDO::FETCH_ASSOC)){
            $row =str_replace("<br>","\n",$row); 
            
              if($row["loves"]){
                $row["loves"]/=1.0;
            }
             if($row["hards"]){
                 $row["hards"]/=1.0;
             }
             if($row["loves"]==0.0){
                $row["loves"]+=0.00001/1;
            }
            if($row["hards"]==0.0){
                $row["hards"]+=0.00001/1;
            }
             $loves[]=$row;
        }
        while($row=$hard->fetch(PDO::FETCH_ASSOC)){
            $row =str_replace("<br>","\n",$row);
            
             if($row["loves"]){
                $row["loves"]/=1.0;
            }
             if($row["hards"]){
                 $row["hards"]/=1.0;
             }
            
             if($row["loves"]==0.0){
                $row["loves"]+=0.00001/1;
            }
            if($row["hards"]==0.0){
                $row["hards"]+=0.00001/1;
            }
             $hards[]=$row;
        }
        $succeeded="done";
        
    }
    $response=["succeeded"=>"$succeeded",
    "likes"=>$likes,
    "loves"=>$loves,
    "hards"=>$hards];
    // echo $response["hards"][1]["hards"];
    //echo var_dump($response);
      echo json_encode($response);
}
    if(isset($_POST['subject'])){
        subject();
    }
    

?>