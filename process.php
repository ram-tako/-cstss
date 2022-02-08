<?php
 session_start();
error_reporting(EALL);
?>

<?php
  include("securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);

  if($valid == true) {
    //echo "<center>Thanks, you entered the correct code.<br />Click <a href=\"javascript:history.go(-1)\">here</a> to go back.</center>";	
?>
<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
//$visitormail = $_POST['visitormail'];
$name = $_POST['name'];
$add = $_POST['add'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

$todayis = date('l dS \of F Y h:i:s A');

//$attn = $attn ;
$subject = 'You Got New Feedback From Your Website. ';

$msg = stripcslashes($msg);

$message = 
" $todayis [EST] <br/>
Name: $name <br/>
Address : $add <br/>
Email Address : $email <br/>
Phone Number : $phone <br/>
Message : $msg <br/>  
";

/*
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";*/

//
$headers.='MIME-Version: 1.0'."\r\n";
$headers.="From: ".$name." <".$email.">\r\n";
$headers.="Reply-To: ".$name." <".$email.">\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
//$from = "From: $name\r\n";


if(mail("max@maxwebsurf.com.au", $subject, $message, $headers)){
?>
<script type="text/javascript">document.location='contact.php?msg=Thank you, Your inquiry has been sent';</script>
<?php   
}else{
?>

<script type="text/javascript">document.location='contact.php?msg=Email Failed'</script>
<?php }?>
	
	<?php 
	
  } else {
    //echo "<center>Sorry, the code you entered was invalid.  <a href=\"javascript:history.go(-1)\">Go back</a> to try again.</center>";
	?>
	<script type="text/javascript">document.location='contact.php?msg=Ops! Your Security Code Not Matched';</script>
	<?php 
  }
?>
