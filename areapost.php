<?php 
 // difference between get and post variables, post variable isn't visible to the browser as for get it's.

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Chris' and $password == 'password1')
{
	echo 'Welcome to the secret website, you are in';
}
else
{
	echo 'Wrong username or password';
}


?>