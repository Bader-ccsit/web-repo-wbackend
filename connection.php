<?php

$dbhost = "localhost";
$dbuser = "Bader";
$dbpass = "admin";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,3306))
{
    
    die("failed to connect!");
}
else{
    
}
