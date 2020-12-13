<?php session_start();
if(isset($_POST['Submit'])) {   if( $_SESSION['chapcha_code'] == $_POST['chapcha_code'] && !empty($_SESSION['chapcha_code'] ) ) {
$youremail = 'jonathansmith702@yahoo.com';
$fromsubject = '';
$title = $_POST['title'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$address = $_POST['address']; 
$city = $_POST['city']; 
$zip = $_POST['zip']; 
$phone = $_POST['phone']; 
$mpriority = $_POST['mpriority']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is '.$title.' '.$fname.' '.$lname.'
	 Address: '.$address.'
	'.$city.', '.$zip.'
	 Phone Number: '.$phone.'
	 E-mail: '.$mail.'
	 Priority: '.$mpriority.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.php'>Home Page</a>"; 
								mail($to, $subject, $body);
		
   } else {
echo "You must write a message. </br> Please go to <a href='/contact.php'>Contact Page</a>"; 
}
?> 