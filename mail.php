<?php
session_start();
$pass=$_SESSION['id'];
$mail=$_SESSION['email']; 
echo $mail;
echo $pass;
$email=strval($mail); 
require_once "phpmailer/PHPMailerAutoload.php";
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = "tls"; 
$mail->Username = "sihcracker2020@gmail.com";                 
$mail->Password = "rajaraja@9583"; 
$mail->setFrom('sihcracker2020@gmail.com','Cracker');
$mail->addAddress($email,'password');
//$mail->addReplayTo('akashnayakakash125@gmail.com');

$mail->isHTML(true);
$mail->Subject = "FOrgot password";

$mail->Body = " <div  style='background-color: black;
width: 200px: height: 400px' >click button 
<a style='	box-shadow:inset 0px -3px 7px 0px #29bbff;
	background:linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
	background-color:#2dabf9;
	border-radius:3px;
	border:1px solid #0b0e07;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:italic;
	padding:12px 69px;
	text-decoration:none;
	text-shadow:0px 1px 0px #263666;' href='http://localhost/latest/pass_set/index.php?pass=".$pass."'>Reset Password</a>
</div>
</body>";


if(!$mail->send()){
    echo "message not sent";
}
else{
    echo "message send check your mail";
}




?>