<?php

/*

CONNECT-DB.PHP

Allows PHP to connect to your database

*/



// Database Variables (edit with your own server information)

$server = '66.147.242.186';

$user = 'urcscon3_jhirs10';

$pass = 'coffee1N';

$db = 'urcscon3_jhirs10';



// Connect to Database

$connection = mysqli_connect($server, $user, $pass, $db);

?>