<?php

if ( isset($_GET['user']) );
{
	echo 'Welcome to the website ' . $_GET['user'];
}

// when you go to browser it drop an error for the user, since it hasn't declare it. So in the browser, it looks like these http://127.0.0.1/php%20practice/isset.php, you type and add ?user=Bob, at the end you will have something like this in the url http://127.0.0.1/php%20practice/isset.php?user=Bob. Then, it would show in the page Welcome to the website Bob 
?>