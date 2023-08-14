<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = '';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
    die("Cannot connect to Database".mysqli_connect_error());
}

?>