<?php
if (!empty($_POST["btn-send"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $toEmail = "irenehapa1999@gmail.com";
    //CRLF Injection attack protection
    $name = strip_crlf($name);
    $email = strip_crlf($email);

    if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "The email is invalid.";
    }else{
        $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
        if (mail($toEmail, $subject, $content, $mailHeaders)){
            $remind = "Successfully sent";
            $type = "success";
        }
        }
    }


?>