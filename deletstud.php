<?php
require 'classes.client.class.php';

$del = new student;
$req = $del->deleteStudent();

header('location:mgrClient.php');
?>