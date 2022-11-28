<?php

if($_POST) {

	$email = trim(stripslashes($_POST['contactEmail']));
   	$subject = trim(stripslashes($_POST['contactSubject']));
   	$contact_message = trim(stripslashes($_POST['contactMessage']));

	$name = trim(stripslashes($_POST['contactName']));
	$message = $name . ' ' . $email . ' ' . $contact_message
	echo $message;

	$url = $_ENV["BLOWERIO_URL"] . "/messages";
	$data = array('to' => '+12069400857', 'message' => $message);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);
	echo $response;
	curl_close($ch);
}

?>