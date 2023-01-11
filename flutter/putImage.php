<?php 


if(isset($_FILES["file0"])){
    $target_dir = "../uploadedImage/"; 
    
 //$_FILES["file"]["size"]

    for($i = 0 ;$i<$_POST["length"];$i++){
        $filename = $_FILES["file".$i]["name"]; 
        $savefile = "$target_dir/$filename";
    
    
        if(move_uploaded_file($_FILES["file".$i]["tmp_name"], $savefile)) {
    
            header('Content-Type: application/json');
            $response=["response"=>"done"];
                     echo json_encode($response);
        }else{
    
        }
    }
}else{
  
}
?>