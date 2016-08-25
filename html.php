<html>
<body>


<!--Below you will see php language, we can embedded html with php and this is a way to do it. The html code between the php code-->

<?php


//echo '<b><u>This is a test</u></b>';
//echo '<br>';
//echo '<a href = "www.google.com" > Google </a>'; //echo means display or print show in the webpage

$names = array('Chris', 'Tom', 'Jim');


foreach ($names as $person){// here means for each value inside names you are gonna used the value person for each one 
// {
//	echo "$person" .'<br>';
//}

?>
<!--another thing you might notice is the php code end here and stsrt html but what it do it will concatenate /copy or do this following step to each name, in order to do that you need to have open php at the end as well -->
<b> <font color = 'red'>The name of the person is <?php echo($person); ?> </font> </b> <br> <!--this sentence is all together but html and php works like this, but for undertand anc clear purpose it better to separate each statement as before we were working.

<?php ///open php code and ends the closing braket here
} 

?>




</body>
</html>