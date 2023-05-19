<?php
include_once("config.php");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$result = mysqli_query($conn, "INSERT INTO customer (first_name, last_name, email, phone, address) 
                                    VALUES ('$firstName', '$lastName', '$email', '$phone', '$address')");

header("Location:index.php");