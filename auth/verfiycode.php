<?php

$emmail = filterRequest("email");


$verfiy = filterRequest("users_verfiycode");

$stmt = $con->prepare("SELECT *FROM users WHERE users_email = '$emmail' AND users_verfiycode = '$verfiy'");

$stmt ->execute();

$count = $stmt->rowCount();

if($count > 0 ){
    $data = array("users_approve" => "1");

    updateData("users", $data , "users_email = '$emmail'");
}else{
    printFailuer("verfiycode not Correct");
    
}