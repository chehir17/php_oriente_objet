<?php
include 'classes/client.class.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$add = new student;
$req = $add->addStudent($firstname,$lastname,$email,$phone);

header('location:mgrClient.php');
?>