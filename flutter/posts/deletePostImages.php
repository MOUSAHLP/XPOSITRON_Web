<?php

 function deleteImages($img1,$img2,$img3,$img4,$img5){
     //The url you wish to send the POST request to
    $url = "https://xpositronposts.000webhostapp.com/deleteImages.php";
    
    //The data you want to send via POST
    $fields = [
        'img1' => $img1,
        'img2' => $img2,
        'img3' => $img3,
        'img4 '=> $img4,
        'img5' => $img5,
    ];
    
    //url-ify the data for the POST
    // $fields_string = http_build_query($fields);
    
    //open connection
    $ch = curl_init();
    
    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));


    
    //So that curl_exec returns the contents of the cURL; rather than echoing it
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
    
    //execute post
    $result = curl_exec($ch);
    
 }
 

?>