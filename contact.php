<?php
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mensaje   = $_REQUEST["mensaje"];
$to    = "olea.oswaldo@gmail.com"; // <--- Change email ID here
if (isset($email) && isset($name)) {
    $subject = "$name sent you a message via All in One Template";
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Mensaje: $mensaje"; //<br/>Message: $msg
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>