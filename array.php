<?php

//$names = array('Chris', 'Tom', 'Bob');

/* 
that is the way of classifying in programming language using array
Chris = number 0
Tom = number 1
bob = number 2
*/
//{
	//echo $names[0];
	//echo', <br> Welcome to the website'; //here in the script the comma will be Chris (since its number 0), <br> break =  its like enter the next line welcome to the website when display in the web
//}

$ages = array('Chris' => 18, 'Tom'=> 20, 'Bob' => 16);

//echo $ages['Chris'];
echo 'Chris is ' . $ages['Chris'] . ' years old.<br>'; // ' years there is a space when display so it's show together 18 years if you put 'years old' 18years old display in the web. another fact in the last statement of php isn't necessary to write 
print_r($ages); //will show up the content in the ages array in the web

?>
