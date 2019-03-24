<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Vinod@123";
$dbname = "trac";
$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname) ;
if(!$con)
{
    die("Unable to connect to database". mysqli_error($con));
}