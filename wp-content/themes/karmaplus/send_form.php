<?php 

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$sub = $_POST['sub'];
$mess = $_POST['mess'];

if(isset($name) && isset($mail) && isset($phone) && isset($sub) && isset($mess)) {

	mail("karmaplius@gmail.com", "New order from KARMAPLUS", "Name: $name\nE-Mail: $mail\nPhone: $phone\nSubject: $sub\nMessage: \n &nbsp;&nbsp;&nbsp;&nbsp;$mess");
	header("Location: /");
}else header("Location: /");

?>