<?php
function download($subject,$year){
    require '../php/config.php';
    if($data_base){
        $download =array();
        $sql;
        if($year == "1"){
            $sql=$data_base->prepare( "SELECT * FROM firstYearFiles WHERE  subject = '$subject' ");
        }
        if($year == "2"){
            $sql=$data_base->prepare( "SELECT * FROM secondYearFiles WHERE  subject = '$subject' ");
        }
        if($year == "3"){
            $sql=$data_base->prepare( "SELECT * FROM thirdYearFiles WHERE  subject = '$subject' ");
        }
        if($year == "4"){
            $sql=$data_base->prepare( "SELECT * FROM fourthYearFiles WHERE  subject = '$subject' ");
        }
        if($year == "5"){
            $sql=$data_base->prepare( "SELECT * FROM fifthYearFiles WHERE  subject = '$subject' ");
        }
        
        $sql->execute();
    
        while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            $row["fileSize"] = $row["fileSize"] /1; 
            
                $download[]=$row;
           }
          // echo var_dump($download[0]);
          echo json_encode($download);
        }
}
// download("math3","2");

if(isset($_POST["subject"]) && isset($_POST["year"])){
    download($_POST["subject"], $_POST["year"]);
}
?>