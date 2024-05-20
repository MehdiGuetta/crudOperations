<?php

$hostname = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'crudoperation';


$con = mysqli_connect($hostname, $username, $password, $database);

if(!$con){
    die(mysqli_error($con));
}

?>