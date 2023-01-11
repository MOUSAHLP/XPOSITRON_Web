<?php

$finalArr = array();

if(isset($_POST["send"])){
    
        $root = scandir("avatars", SCANDIR_SORT_NONE);
    
    if(in_array(".",$root) || in_array("..",$root ))
        {
          $root = array_slice($root ,2);
        }
    
    
    
      foreach($root as $folders ){
          $filesArr = array();
          
            $files = scandir( "avatars/" . $folders, SCANDIR_SORT_NONE);
    
            if(in_array(".",$files) || in_array("..",$files ))
                {
                  $files = array_slice($files ,2);
                }
          
           foreach($files as $file ){
                $filesArr[] = "https://xpositronstore.000webhostapp.com/avatars/" .$folders . "/" . $file;
           }
           
           $finalArr[$folders]=$filesArr;
            
      }
    //   print_r($finalArr);
    
    echo json_encode($finalArr);
}

?>