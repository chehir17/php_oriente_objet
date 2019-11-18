<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity=" " crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
require 'classes/client.class.php';
$add = new student;
$req = $add->slcid();


?>
            <form action="updstud.php" method="POST">
                <h1>Editer étudiant</h1>
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id=""  class="form-control" value="<?= $data['firstname']?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="" class="form-control" value="<?= $data['lastname'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="" class="form-control" value="<?= $data['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="" class="form-control" value="<?=  $data['phone'] ?>">
                </div>
               <input type="number" name="id" id="id" hidden value="<?= $data['id'] ?>">
               <input type="submit" value="Enregistrer" class="btn btn-info">
               <input type="reset" value="Annuler" class="btn btn-danger">
            </form>
    </div>
    
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>