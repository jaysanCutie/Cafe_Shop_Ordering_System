
<?php

//connectiong to database "coffee_db" log in and sign up
$conn = mysqli_connect('localhost','root','','deja_brew','4306') or die('connection failed');

//connection to database "coffee_db" log in and sign up 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "deja_brew";
$port = "4306";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname, $port))
{
   die("failed to connect!");
}

?>