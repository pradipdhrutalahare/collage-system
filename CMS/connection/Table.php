<?php

include 'DBcon.php';

 
//create table
$con = mysqli_connect('localhost', 'root','','Management');

//BOOK TABLE CTEATE 

 $sql = "CREATE TABLE IF NOT EXISTS book( 
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `library_name` varchar(255) NOT NULL ,
    `book_name` varchar(255) NOT NULL,
    `author` varchar(255) NOT NULL,
    `book_status` varchar(255) NOT NULL
)";

$result = mysqli_query($con , $sql) or die("Bad create: $sql");
$sql = "INSERT INTO book(`library_name`, `book_name`, `author`, `book_status`) VALUES
('North Campus Library', 'Basics of Database', 'Reda Alhajj', 'Unavailable')";

       if (mysqli_query($con ,$sql)) {
         echo "New record created successfully";
       }else {
           echo "Error: " . $sql . "<br>". mysqli_error($con);
       }

mysqli_close($con);



?>