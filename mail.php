<?php $firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$enquiry = $_POST['enquiry'];
		$contact = $_POST['contact'];
		$message = $_POST['message'];

		$formcontent="From: $firstName , $lastName \n Enquiry: $enquiry \n Contact: $contact \n Message: $message";
		$recipient = "lukeconnor1704@gmail.com";
		$subject = "Contact Form";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" <a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>;
		?>