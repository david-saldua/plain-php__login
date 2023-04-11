<?php 

// defining a variables that will be used to the database.


// Here are the things that we need to understand in order to create connection to the mysql. Let us remember the mnemonics SUPN which means (SERVER, USERNAME, PASSWORD and NAME)

define('DB_SERVER', 'localhost'); // defining the server of our mysqli
define('DB_USERNAME','root'); //usually, root is always the username we use to access and log in in mysqli.
define('DB_PASSWORD', ''); // for now we are going to leave the password empty but we can always set up the password
define('DB_NAME' 'login') // we are going to select the database name / schema we created and will call it here


// Connecting it to mysqli
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);  // for now we are going to use the procedural method, by using the php built in command musqli_connect

// Checking if it is not connected to mysqli

if ($link == false) { // we put a conditional statement that will determine if the connection we made is true. if it returns false, we'll be displaying the word ERROR: MYSQLI COULD NOT CONNECT
    die("ERROR: MYSQLI COULD NOT CONNECT" . mysqli_connect_error);
}






















































?>