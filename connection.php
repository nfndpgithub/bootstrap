<? php

/* db connection settings */
//$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="users";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("faild to connect!");
}
?>