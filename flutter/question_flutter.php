<?php
    require '../php/config.php';
     if(isset($_POST['questions'])){
        $questions =array();
      
        $sql=$data_base->prepare( "SELECT * FROM questions");
        $sql->execute();
 
       while($row=$sql->fetch(PDO::FETCH_ASSOC)){
           
         $row =str_replace("<br>","\n",$row);
        //   echo $row['answer']   ;
        //   echo "===========================================";
             $questions[]=$row;
        }
       
        // echo var_dump($questions);
        echo json_encode($questions);
     }
    
?>