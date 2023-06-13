<?php 
header("Content-type: application/json");

//Set database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
// $option = array(
//    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
// );
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //  header("Access-Control-Allow-Origin: *");
    // Retrieve data from POST request
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    
    // Assign values from the data object
   //  $id = $data['id'];
    
    // Prepare and execute query
    $stmt = $conn->prepare("SELECT * FROM users");
   //  $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    // Fetch result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Return result as JSON
    echo json_encode($result);
    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} 
?>


<!-- // $dsn = "mysql:host=localhost;dbname=ecommerce";
// $user = "root";
// $pass = "";
// $option = array(
   // PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
// );
// $countrowinpage = 9;
// try {
   // $con = new PDO($dsn, $user, $pass, $option);
   // $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // header("Access-Control-Allow-Origin: *");
   // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   // header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
   // include "functions.php";
   // if (!isset($notAuth)) {
      // checkAuthenticate();
   // }
// } catch (PDOException $e) {
   // echo $e->getMessage();
// } -->
