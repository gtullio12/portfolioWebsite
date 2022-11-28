<?php

// Replace this with your own email address
$siteOwnersEmail = 'gtullio12@protonmail.com';

if($_POST) {

	$name = trim(stripslashes($_POST['contactName']));
	$message .= "Message from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
	$message .= "Message: <br />";
	$message .= $contact_message;
	$message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";

	$url = $_ENV["BLOWERIO_URL"] . "/messages";
	$data = array('to' => '+12069400857', 'message' => 'Hello from Blower.io');

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);
	curl_close($ch);
}

?>