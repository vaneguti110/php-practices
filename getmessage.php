<?php
//dynamic functions 
/* you display it would show up a error display undefined syntax

browser localhost/getmessage.php  
type and add (dynamic part) in the browser localhost/getmessage.php?name=Chris 

/questionmark means we pass a variable to the server
add name = name of a person 

then in the web will display Welcome to the website Chris.*/
$name = $_GET['name'];
$age = $_GET['age'];

echo 'Welcome to the website ' . $name .' and you are ' . $age . ' years old.';


?>
