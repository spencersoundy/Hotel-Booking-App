<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hotelbookingapp';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
    die("Cannot connect to Database".mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key => $value){
        $data[$key]
    }
}

?>