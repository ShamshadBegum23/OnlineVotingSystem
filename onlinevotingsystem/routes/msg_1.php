<!--DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                            <div class = "form-group">
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







<!-?php

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

    // Print error if any
    if(curl_errno($ch)){
        echo 'error:' .curl_error($ch);
    }

    curl_close($ch);

    echo '<script> alert("Your message has been sent to '.$mobileNumber.' by this '.$response.')</script>';
}

?-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUERY BOOTH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="number">MOBILE NUMBER</label>
                            <input type="tel" class="form-control" id="number" name="number" placeholder="Enter Number" ><br>
                        </div>
                        <div class="form-group">
                            <label for="message">MESSAGE</label><br>
                            <textarea class="form-control" name="message" cols="20" rows="5" ></textarea>
                        </div>
                        <button type="submit" name="sendmsg" class="btn btn-primary">SEND MESSAGE</button>
                        <a href="#"><button type="submit"  class="btn btn-primary">BACK</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!--?php

$authKey = '411827AaVxaDJtDFzI657ade92P1';

if (isset($_POST['sendmsg'])) {
    $mobileNumber = $_POST['number'];
    $msg = $_POST['message'];

    $message = urlencode($msg);

    $route = "4"; // Update with the appropriate route

    $postData = [
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'route' => $route,
        // Add other required parameters
    ];

    $apiEndpoint = 'https://api.msg91.com/api/sendhttp.php';

    $ch = curl_init($apiEndpoint);
    curl_setopt_array($ch, [
        CURLOPT_URL => $apiEndpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postData),
    ]);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    // Print error if any
    if (curl_errno($ch)) {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);

    echo '<script>alert("Your message has been sent to ' . $mobileNumber . ' with response: ' . $response . '")</script>';
}

?-->

<!--?php

$authKey = '411827AaVxaDJtDFzI657ade92P1';

if (isset($_POST['sendmsg'])) {
    $mobileNumber = $_POST['number'];
    $msg = $_POST['message'];

    $message = urlencode($msg);

    $route = "4"; // Update with the appropriate route

    $postData = [
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'route' => $route,
        'sender' => 'SAHERABI', // Replace with your sender ID
        // Add other required parameters
    ];

    $apiEndpoint = 'https://api.msg91.com/api/sendhttp.php';

    $ch = curl_init($apiEndpoint);
    curl_setopt_array($ch, [
        CURLOPT_URL => $apiEndpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postData),
    ]);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    // Print error if any
    if (curl_errno($ch)) {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);

    echo '<script>alert("Your message has been sent to ' . $mobileNumber . ' with response: ' . $response . '")</script>';
}

?-->

<!--?php

$authKey = '411827AaVxaDJtDFzI657ade92P1';

if (isset($_POST['sendmsg'])) {
    $mobileNumber = $_POST['number'];
    $msg = $_POST['message'];

    $message = urlencode($msg);

    $route = "4"; // Update with the appropriate route

    $postData = [
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'route' => $route,
        'sender' => 'SAHERABI', // Replace with your sender ID
        // Add other required parameters
    ];

    $apiEndpoint = 'https://api.msg91.com/api/sendhttp.php';

    $ch = curl_init($apiEndpoint);
    curl_setopt_array($ch, [
        CURLOPT_URL => $apiEndpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postData),
    ]);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    // Print error if any
    if (curl_errno($ch)) {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);

    // Convert hexadecimal response to ASCII
    $decodedResponse = hex2bin($response);

    echo '<script>alert("Your message has been sent to ' . $mobileNumber . ' with response: ' . $decodedResponse . '")</script>';
// ...
$response = curl_exec($ch);

// Print error if any
if (curl_errno($ch)) {
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

// Display the response
echo '<script>alert("Your message has been sent with response: ' . $response . '")</script>';

}

?-->


<?php

$authKey = '411827AaVxaDJtDFzI657ade92P1';

if (isset($_POST['sendmsg'])) {
    $mobileNumber = $_POST['number'];
    $msg = $_POST['message'];

    $message = urlencode($msg);
    $route = "4"; // Update with the appropriate route
    $senderID = 'SAHERABI'; // Replace with your sender ID

    $postData = [
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'route' => $route,
        'sender' => $senderID,
        // Add other required parameters
    ];

    $apiEndpoint = 'https://api.msg91.com/api/sendhttp.php';

    $ch = curl_init($apiEndpoint);
    curl_setopt_array($ch, [
        CURLOPT_URL => $apiEndpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postData),
    ]);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    // Print error if any
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        // Decode the response from hexadecimal
        $decodedResponse = hex2bin($response);
        echo '<script>alert("Your message has been sent to ' . $mobileNumber . ' with response: ' . $decodedResponse . '")</script>';
    }

    curl_close($ch);
}

?>





