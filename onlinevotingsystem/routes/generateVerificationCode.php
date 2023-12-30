<?php
function generateVerificationCode($length=6){
    $character ='0123456789';
    $code='';
    for($i=0;$i<$length;$i++){
        $code .= $character[random_int(0,strlen($character)-1)];

    }
    return $code;
}
$verificationCode=generateVerificationCode();
echo "Your verification code:$verificationCode";
?>