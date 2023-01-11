
<!-- ceYOEKAjRJua9Hzo3sVt7x:APA91bFeKvPPRsR8yaWzW816mpoB4jdl4ne59xAdvsYxplr2ZvaUMwA1H-ol1_0iFwXtzn5qXWeqNwVgOGPnhOV3qBS8x_OtF6FXmRVdkAlQpFPq65qsy8s-NZfZ4YQ59mFjnvp4sx_C -->
<?php


function sendGCM($id ,$messageTitle ,$messageBody,$img, $token = "" ) {
if($token =="")
    $token = "/topics/xpositron";

    $url = 'https://fcm.googleapis.com/fcm/send';

    $headers = array (
            'Authorization: key=' . "AAAA8PPIZlo:APA91bG64M-4xp-L2qOgGFQKLK-5pK2A1hk8_QWmW0MA1sol70cU96NKEAmGFM8xYWknh4ITyhIa3UJ3AgTJwO3cOQN-FLblWGFnmwKA-LoDRUeLoWm8e0ypyD7esd00tSB-YHBl-779",
            'Content-Type: application/json'
    );

    $notifdata = ["id" => $id,"title" => $messageTitle,"body" => $messageBody, 'image' => $img];
    $apibody = ["notification" => $notifdata, "data" => $notifdata,"to" =>$token];

    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_POST, true );
    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, json_encode($apibody) );

    $result = curl_exec ( $ch );
    curl_close ( $ch );
}


?>