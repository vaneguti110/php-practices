<?php

// To delete an entry or information we enter in the phpmyAdmin, we just go to database structure of accounts and go for the table users2 and look for empty and here will delete the entry of the username.

$accounts = mysqli_connect("localhost", "root", "", "accounts") 
or die (mysqli_error());

//mysqli_select_db("accounts", $accounts);

$sql = "
INSERT INTO users2 (Username, Password, First, Last, About) VALUES('Bob', 'password123', 'Bob', 'Johnson', 'This is Bob.')";// when you insert the values has to be in the same order as you mention, for instance (Username, Password, First, Last, About) VALUES ('Bob', 'password123','', '', 'This is Bob.') you can also leave some values in blank

mysqli_query($accounts, $sql);


?>