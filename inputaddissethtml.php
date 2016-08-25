<html>
<body>

<form action = "inputaddissethtml.php" method="GET">
<input type = "number" size = "5" name = "num1"> +
<input type = "number" size = "5" name = "num2">
<input type = "submit" value = "Add">
</form>


<!--Below you will see php language, we can embedded html with php and this is a way to do it. The html code between the php code-->

<?php
//here you put and if, to declare you are seeting num1 and num2 in the browser page, if you don't do that it would drop an error
//The isset function will allow you to determine if a variable has been set or not. This can be useful when checking if user input has been entered or not. The function will return either a true or false value

if ( isset($_GET['num1']) and  isset($_GET['num2']) ){	
$num1 = $_GET ['num1'];
$num2 = $_GET ['num2'];
$total = $num1 + $num2;

echo 'The total is ' . $total;
}

?>


</body>
</html>