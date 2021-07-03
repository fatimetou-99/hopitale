<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "hopitale";

$dbCon = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$dbCon) {
	echo "Connection failed!";
}