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
<h2>Nouvel Client :</h2>
<form class="form-horizontal" action="addstud.php" method="POST">
<fieldset>
<legend>Ajouter client :</legend>
    <div class="form-group">
      <label class="control-label col-sm-2" for="firstname">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" placeholder="Enter First Name" name="firstname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lastname">Last name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="" placeholder="Enter last Name" name="lastname">
      </div>
    </div>

    <div class="form-group">        
    <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="" placeholder="Enter Email" name="email">
      </div>
    </div>

    <div class="form-group">        
    <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="" placeholder="Enter Phone Number" name="phone">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Ajouter</button>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <button type="reset" class="btn btn-danger">Annuler</button>
      </div>
    </div>
    </fieldset>
  </form>
</div>


<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>