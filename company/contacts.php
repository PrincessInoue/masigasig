<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$connection = new mysqli('a2nlmysql19plsk.secureserver.net:3306','masigasig','yoOna@123','ph19956732432_');
if($connection->connect_error){
    echo "$connection->connect_error";
    die('Connection Failed: ' .$connection->connect_error);
}else{
    $stmt = $connection->prepare("insert into contacts(name, email, phone, message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    $stmt->execute();
    $message = "Your contact information is saved successfully.";
    $type = "success";
    $stmt->close();
    $connection->close();
}

?>



