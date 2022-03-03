<?php

//connection to database
$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('could not connect: ' . mysqli_error() );
}else {
    echo "connect succefully";
}

mysqli_close($con);


//create database
$dbname = 'Management';

//connection to dabase
$con = mysqli_connect('localhost', 'root','','');

if (!$con) {
    die('could not connect: '. mysqli_error());
}

$sql = 'CREATE DATABASE IF NOT EXISTS  Management';

if (mysqli_query($con , $sql)) {
    echo "Database created seccessfully";
}else{
    echo "Error creating database: " . mysqli_error($con);
}





?>



