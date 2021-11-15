<?php

$dbhost="remotemysql.com";
$dbuser="kJPINILSBe";
$dbpass="9ItQywDQJ4";
$dbname="kJPINILSBe";

if(!$con= mysqli_connect($dbhost,$dbuser, $dbpass, $dbname))
{
    die("Failed to connect to server!");
}
