<?php
header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../../vendor/autoload.php');
include("../controllers/index.php");

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

//HTTP Request parse start
$name = $_REQUEST['name'];
$mobile = $_REQUEST['contactnumber'];
$email = $_REQUEST['mail'];
$location = $_REQUEST['location'];
//HTTP Request parse end

$mail->isSMTP(); 
$mail->SMTPAuth   = true;                                 
$mail->Host       = 'smtp.gmail.com';                     
$mail->Username   = 'vgts.dev@gmail.com';                 
$mail->Password   = 'vredpzyrhotllflu';                   
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
$mail->Port       = 465;

//Recipients
$mail->addAddress('nesanoctact@gmail.com', 'nesamani');
$mail->addAddress('kalpana@vgts.tech', 'kalpana');
$mail->SetFrom('fromgmail@gmail.com', 'My Harvest');                                
$mail->Subject = 'Here is the subject';
$mail->Body=
"<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>
<body>
Name : ".$name." <br/>
Email : ".$email." <br/>
Mobile : ".$mobile." <br/>
Location : ".$location." <br/>
</body>
</html>
";
$mail->isHTML(true);
$mail->send();
echo json_encode((object) ["sent" => true, "message" => 'Message has been sent']);

} catch (Exception $e) {
echo json_encode((object) ["sent" => false, "message" => $mail->ErrorInfo]);
}