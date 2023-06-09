<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "wael2",
"users_email" => "yousef@gmail.com",
"users_phone" => "771274299",
"users_verfiycode" => 3243243,       
);
$count = insertData($table , $data);