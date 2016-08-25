<?php
// a nice way to have both the html and php code neat and without errors, as the previous example in getfile.php

$file = "./document.txt";
$document = file_get_contents($file);

$lines = explode ("\n", $document); // split each line 

foreach ($lines as $newline) {
 	
 	echo '<b>' . $newline . '</b><br>';
 } 



?>