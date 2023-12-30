<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name = "viewport" content ="width-device-width ,intital-scale-1.0">
        <title>QUERY BOOTH</title>
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class = "container">
            <div class = "jumbotron">
                
                <div class = "row">
                    <div class = "col-m1-6">
                        <form action ="" method = "POST">
                            <div class = "form-group">
                                <label for = "number">MOBILE NUMBER</label>
                                <input type = "number" class = "form-control" id = "number" name = "number" placeholder = "Enter Number"><br><br>
                            </div>
                            <br>
                            <div class = "from-group">
                                <label for = "message">MESSAGE</label><br><br>
                                <textarea class ="form-control" name = "message" cols= "20" rows = "20"></textarea>
                            </div>
                            <button type = "submit" name = "sendmsg" class = "btn btn-primary">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



<?php

$authKey = '411827AaVxaDJtDFzI657ade92P1';

if(isset($_POST['sendmsg'])){

    $mobileNumber = $_POST['number'];
    $msg = $_POST['message'];

    $message = urlencode($msg);

    
    $route = "default";

    //$message = 'VOTE HAS BEEN RECORDED';

    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'route' => $route
        // Add other required parameters
    );

    $apiEndpoint = 'https://api.msg91.com/api/sendhttp.php';

   $ch = curl_init($apiEndpoint);
   curl_setopt_array($ch,array(
        CURLOPT_URL => $apiEndpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData

   ));

   curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

   $response = curl_exec($ch);

   //print error if any
   if(curl_errno($ch)){
        echo 'error:' .curl_error($ch);
   }

   curl_close($ch);

   echo '<script> alert("Your message has been sent to '.$mobileNumber.' by this '.$response.')</script>';


}


?>

