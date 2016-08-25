<html>
<body>


<!--Below you will see php language, we can embedded html with php and this is a way to do it. The html code between the php code-->

<?php

$color = $_GET['color'];
//here the php inside html and you can see the sign > ends in the html so you have to enter the web url and add ?color=yellow or whatever color you will like to choose
?>
<b><font color="<?php echo $color; ?>">welcome to the website</font></b>
<form>
      put a color<input type="text" name="color">//extra feature you can insert the color in this input
 </form>

    
</body>

</body>
</html>