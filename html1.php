<html>
<body>


<!--Below you will see php language, we can embedded html with php and this is a way to do it. The html code between the php code-->

<?php


echo '<b><u>This is a test</u></b>';
echo '<br>';
echo '<a href = "www.google.com" > Google </a><br>'; //echo means display or print show in the webpage

$names = array('Chris', 'Tom', 'Jim');


foreach ($names as $person){// here means for each value inside names you are gonna used the value person for each one 

	echo "$person" .'<br>';
}

?>


</body>
</html>