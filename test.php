<?php 

include './connect.php';
include './functions.php';


// $to =  "watanalihsas@gmail.com";
//  $title = "Hellow MS yousef hajeb";
//  $body = "Im you , yes im Yousef";
// $hreader = "From: support@yousefhajebb.com"."/n"."CC:youseflwdaw@gmail.com";
// senfMail ($to,$title, $title);


// to add user 
// $table = "users";
// $data = array( 
//     "users_name" => "wael",
//     "users_email" => "wael@gmail.com",
//     "users_phone" => "324234",
//     "users_verfiycode" => 323243,       
//     "users_password" =>'232332'
//     );
//     $count = insertData($table , $data);


getAllData2($conn,"users");

?>

