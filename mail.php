<?php
$email='shivam20292414@gmail.com';
$username='shivam';
$password='987654321';
$msg='Congratulations, you have been successfully registered as an ADMIN on HMS with username='.$username.' and password='.$password.'.';
wordwrap($msg,70);
if(mail("$email","Registration Successful","$msg")){
echo 'Email Sent';
}
?>