<?php


// initialize the session
session_start();

// I define constant break to BR cause I'll use it  a lot.
const BR = '<br />';


//I'm including my header on index.php.
include_once 'header.html';

//this one is for the database.
include 'database.php';


if(isset($_SESSION['loggedin'])){
    header('location: homepagina.php');
    exit;

}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage/title>
</head>
<body>
    
</body>
</html>