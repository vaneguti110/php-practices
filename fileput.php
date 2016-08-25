<?php
//in this file we are creating a text that will contain all the document assign here below 
$file = "./lines.txt";
$write = "This is line one\n"; //backlash break line

file_put_contents($file, $write, FILE_APPEND); // FILE APPEND will add the add content. for instance we start with this is line one in the statement before, we look on the webpage in the lines.text and it show only this line. Then we modify and put line two example $write = "This is line two\n";then add the part file append in file_put_contents($file, $write, FILE_APPEND); and when you reload the lines.txt you will see both lines

?>