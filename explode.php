<?php

//the variable explode split the variables into pieces


$sentence = 'I am enjoying tht PHP video tutorials.';

//$parts = explode(' ', $sentence);// explode('', $sentence) means for each spsce clasifiy the order when display in the web

$parts = explode('P', $sentence);// explode('', $sentence) means for the beginneing of the letter P make a spsce clasifiy the order when display in the web

print_r($parts);

echo $parts[1]; //it will display in the web H since the first sentence[0] is I am enjoying tht P, sentence[1]= H, sentence[2]=P video tutorials. 



?>