<?php

$sname= "Fede";
$unmae= "Ma che cabbo";
$password = "FAI?";

$db_name = "ZIO PERA";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
