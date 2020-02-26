<?php

// Define some constants
define( "RECIPIENT_NAME", "Ankit " );
define( "RECIPIENT_EMAIL", "ankitbhardwaj244487@gmail.com" );


// Read the form values
$success = false;
$senderName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = "Mail from Parsvnaths Royal's Site";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $subject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $success = mail( $recipient, $subject, $message, $headers );
  echo 'success';
  //Set Location After Submission
  //header('Location: contact.html');
}

else{
	//Set Location After Submission
  //	header('Location: contact.html');	
}

?>