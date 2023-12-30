<?php
$connect = mysqli_connect("localhost","root","","voting") or die("connection failed!");
if($connect){
    echo "OOPS! YOU ENTERED DUPLICATE DATA";
}
else{
    echo "Not connected!";
}
?>
