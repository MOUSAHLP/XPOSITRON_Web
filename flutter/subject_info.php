<?php

function subgectInfo($userVersion,$userInfoVersion){
    $versionfun = "1";
    $subjectInfoVersionfun = "1";
    require '../php/config.php';
    if($data_base){
        $subgectinfo =array();
        $newVesionText =array();
        $final =array();
        $sql=$data_base->prepare( "SELECT * FROM subjects ");
        $sql->execute();
    
        while($row=$sql->fetch(PDO::FETCH_ASSOC)){

             $row =str_replace("<br>","\n",$row);

        
                $subgectinfo[]=$row;
                
           }
           
                if( $versionfun == $userVersion&&
                $subjectInfoVersionfun == $userInfoVersion
                ){
                      $final = ["" 
                            ,"your subjectInfoVersion is uptodate"
                            ,"your app version is uptodate"];
                }
                
                else if($versionfun == $userVersion&&
                $subjectInfoVersionfun != $userInfoVersion){
                       $final = [$subgectinfo 
                    ,$subjectInfoVersionfun 
                    ,"your app version is uptodate"];
                }
                
                 else if($versionfun != $userVersion&&
                $subjectInfoVersionfun == $userInfoVersion){
                     $newVesionText = ["title"=>"تحديث 2,0 متوفر","desc"=>"حمل الان اخر تحديث \n هيثابلعهثا علبثعصهبالعهقثب عقثلبعهثقصل بعقلثبعقث غعهبق","link"=>"","version"=>$versionfun]; 
                      $final = ["" 
                       ,"your subjectInfoVersion is uptodate" 
                       ,$newVesionText];
                }
                else{
                       $newVesionText = ["title"=>"تحديث 2,0 متوفر","desc"=>"حمل الان اخر تحديث \n هيثابلعهثا علبثعصهبالعهقثب عقثلبعهثقصل بعقلثبعقث غعهبق","link"=>"","version"=>$versionfun];
                   $final = [$subgectinfo 
                   ,$versionfun 
                   ,$newVesionText];
                    
                }
           
           
        //   for($i=0;$i<14;$i++){
                   
        //     echo var_dump($final);
        //     echo "<br>=============================";
        //   }
         echo json_encode($final);
        }
}

 // subgectInfo("1","1");

if(isset($_POST["subjectInfoVersion"]) ||
     isset($_POST["version"])){
       
         subgectInfo( $_POST["version"],$_POST["subjectInfoVersion"]);
  
}
?>