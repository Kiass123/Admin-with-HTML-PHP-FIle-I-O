<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['email']) || !isset($_SESSION['type'])) {
    header('location:login.php');
    exit();
}
$username = $_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
</head>

<body>
    <div>