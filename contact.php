<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    session_start();
    include_once "config.php";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    
    if($name == "" || $email == "" || $comment == "")
    {
        $_SESSION['err_msg']="Enter All Deatils Carefully!!!";
        exit();
    }
    $sql = "insert into comments(name,email,mobile,comment) values ('$name' , '$email' , '$mobile' , '$comment')";
    
    $res = $con->query($sql);
    if (!$res)
    {
        echo "Error while Execution";
    }
        
    require 'vendor/autoload.php';
    $mail = new PHPMailer();
    try {
      //Server settings
                           // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'praveensutar32@gmail.com';                     // SMTP username
      $mail->Password   = '8080888855';                               // SMTP password
      $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  
      //Recipients
      $mail->setFrom('Praveen_Portfolio@gmail.com', 'PortFolio Website');
      $mail->addAddress('praveensutar302@gmail.com');     // Add a recipient
      
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Received Comment on Website!!!';
      $mail->Body    = "Name:". $name ."<br>Mobile No.:". $mobile ." <br>Email :". $email ."<br>Comment :". $comment ."<br>";
      
  
      $mail->send();
      echo "Mail sent!!!";
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }











  //   $mail = new PHPMailer();

  // $mail->setFrom('mahendrasutar@gmail.com');
  // $mail->addAddress( $email, $name);
  // $mail->Subject = "Please verify email!";
  // $mail->isHTML(true);
  // $mail->Body = "

  //     One Time Password for  authentication is:<br/><br/> 

  // ";
  // if( $mail->Send())        //Send an Email. Return true on success or false on error
  // {
  //  echo "SENT";
  // }
  // else
  // {
  //  echo $mail->ErrorInfo ;
  // }

    

?>