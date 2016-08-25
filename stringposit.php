<?php

// = to assign a value
// == to compare to value
/// === identical as value and data type

/* another way to used comment in large scale
$sentence = 'This is the tutorial number 21';
$needle = 'n'; // we search in the sentence the letter n, counting each letter as a number for the position

$search = stripos($sentence, $needle);

if ($search === FALSE)
{
	echo 'The letter was not found';
}
else
{
	echo 'The position of the string is ' .$search;
}
*/

$email = 'testing@hotmail.com';
$needle = '@'; // we search in the sentence the letter @

$search = stripos($email, $needle);

if ($search === FALSE)
{
	echo 'This is not a valid email';
}
else
{
	echo 'This is a valid email'; //at the end will show in the browser a valid email
}
?>