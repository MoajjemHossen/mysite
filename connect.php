<?php

$hnm = "localhost";
$dbunm = "signup";
$dbpwd = "signup";
$dbnm = "signup";

$connect = mysqli_connect($hnm, $dbunm, $dbpwd, $dbnm);

if($connect==false){
	echo "<h1>Erorr establashing database connection!</h1>";
}


?>