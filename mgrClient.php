<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container py-3">
<div class="jumbotron">
<H1>Liste Des Etudients DSI21 Iset Bizerte 2019
</H1>
</div>
</div>

<div class="container">
<a href="addindex.php"><button class="btn btn-info"><i class="fa fa-user-plus"></i>Nouvel etudient</button></a>
</div>
<br>
<div class="container">
<table class="table table-hover">

<thead>
<tr>
<th>ID</th>
<th>firstname</th>
<th>lasname</th>
<th>email</th>
<th>phone</th>
<th>Operation</th>
</tr>
</thead>
<tbody>
<?php
  include 'classes/client.class.php';

  $stud = new student;
  $liststud = $stud->readAllStud();
  while ($data = $liststud->fetch()){
  ?>
      <tr>
      <td><?= $data['id'] ?></td>
      <td><?= $data['firstname'] ?></td>
      <td><?= $data['lastname'] ?></td>
      <td><?= $data['email'] ?></td>
      <td><?= $data['phone'] ?></td>
      <td><a href="upindex.php?id='.$data['id'].'">Edetier</a></td>&nbsp;&nbsp;
      <td><a href="deletstud.php?id='.$data['id'].'">Suppmimer</a></td>
      </tr>
   <?php
   } 
   ?>
</tbody>
</table>
</div> 

<script src="bootstrap/js/bootstrap.min.js"></script>  
</body>
</html>