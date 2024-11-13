<?php
include '../connect.php';


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
if (isset($_POST["send"])) {
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  //Server settings
  //$mail->SMTPDebug = 2;                      //Enable verbose debug output
 $mail->isSMTP();                                            //Send using SMTP
 $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
 $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
 $mail->Username   = 'basimashraf11@gmail.com';                     //SMTP username
 $mail->Password   = 'ajsosgqhfyvlteil';                               //SMTP password
 $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
 $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

 //Recipients

 if(isset($_GET['compint_id'])){
  $id = $_GET['compint_id'];
  $sel= $con->prepare("SELECT * FROM `complints`WHERE compint_id = '$id' ;");
  $sel->execute(array());
  $compl=$sel->fetch();
   }
   $mail->setFrom($compl["email"],"Luxor University");
   $mail->addAddress($compl["email"], $compl["name"]);     //Add a recipient           //Name is optional
   $mail->addReplyTo($compl["email"], $compl["name"]);
  
 //Attachments
 //$mail->addAttachment('');         //Add attachments
   

 //Content
 $mail->isHTML(true);                                  //Set email format to HTML
 $mail->Subject = "Respond to the complaint, ".$compl["name"] ;
 $mail->Body    = $_POST["message"];

 $mail->send();

//////////////////////////

 if(isset($_GET['compint_id'])){
  $id = $_GET['compint_id'];
  $stmt= $con->prepare("UPDATE complints SET  `status--enum`=1 WHERE compint_id = '$id'");
  $stmt->execute(array());

echo
 " 
 <script> 
 alert('Message was sent successfully!');
  document.location.href = '../index.php';
</script> ";

  } 
  
///////////////////
 
}

