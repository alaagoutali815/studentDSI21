<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
   
</head>
<body>
<div class="container">
<fieldset>
<legend>Nouvel étudiant</legend>
<form action="store.php" method="post">
<div class="row">
     <div class="col-md-6">
  <div class="form-group">
      <label for="firstname">First Name :</label>
      <input type="text" name="firstname" class="form-control" >
</div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
      <label for="lastname">Last Name :</label>
      <input type="text" name="lastname" class="form-control" >
      </div>
</div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
      <label for="email">Email :</label>
      <input type="text" name="email" class="form-control" >
      </div>
            </div>

                <div class="col-md-6">
    <div class="form-group">
     <label for="phone">Phone :</label>
      <input type="number" name="phone" class="form-control" >
      </div>
        </div>
        </div>

  <div class="form-group">
 
  <button type="submit" class="btn btn-outline-enregistrer">Enregistrer</button>
 
  <button type="reset" class="btn btn-default">Annulerr</button>
  </div>
</div>
</fieldset>


</body>
</html>