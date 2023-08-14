<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hotel-booking-app';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
    die
}

?>