<?php 
//another way to create a database called accounts and table aclled users2 from php
$accounts = mysqli_connect("localhost", "root","","accounts") or die (mysqli_error()); //check connection

//mysql_select_db($accounts,"accounts"); // in this statement is to create the database "accounts", then you have ti put the connection to the database that is $accounts 

$sql = "CREATE TABLE users2
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY (ID),
Username varchar(20),
Password varchar(20),
First varchar (20),
Last varchar (20),
About text 
)";

//execute query 
mysqli_query($accounts, $sql); //enter in the database the table 

//after that, you have to check that there isn't any error in the browser in the table.php and then you go to phpmyAdmin, you insert the content in browser of a username in the table manually




?>