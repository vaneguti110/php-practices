<?php

header('Content-type: text/plain'); //in order to display the content as a plain text in the webpage, we need to add this value, but if you put normal text of html code it also would show up so be careful

$file = "./document.txt";

$document = file_get_contents($file);

echo $document;

//echo '<br><b>This is bold</b>'; for instance this html code

?>