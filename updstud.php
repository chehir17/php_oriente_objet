<?php
    include 'classes/client.class.php' ;
     
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $id = $_POST['id'];

    $add = new student;
    $req = $add->updateStudent($id,$firstname,$lastname,$email,$phone);
    return $req;
    header('location:mgrClient.php');
   
      
    ?>