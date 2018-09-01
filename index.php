<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
<h2 align="center">Encripte palabras en ingles</h2>
<form class="form-horizontal" action="validaciones.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" >Palabra:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="palabra" placeholder="Ingrese la palabra que desea encriptar">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Clave:</label>
    <div class="col-sm-7"> 
      <input type="text" class="form-control" name="llave" placeholder="Ingrese la llave">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Encriptar</button>
    </div>
  </div>
</form>

<form class="form-horizontal" action="validaciones.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" >Palabra:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="palabra1" placeholder="Ingrese la palabra que desea desencriptar">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Clave:</label>
    <div class="col-sm-7"> 
      <input type="text" class="form-control" name="llave1" placeholder="Ingrese la llave">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="submit1">Desencriptar</button>
    </div>
  </div>
</form>

<h2 align="center">Encripte palabras en español</h2>

<form class="form-horizontal" action="validaciones.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" >Palabra:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="palabra2" placeholder="Ingrese la palabra que desea encriptar">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Clave:</label>
    <div class="col-sm-7"> 
      <input type="text" class="form-control" name="llave2" placeholder="Ingrese la llave">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit2">Encriptar</button>
    </div>
  </div>
</form>

<form class="form-horizontal" action="validaciones.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" >Palabra:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="palabra3" placeholder="Ingrese la palabra que desea desencriptar">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Clave:</label>
    <div class="col-sm-7"> 
      <input type="text" class="form-control" name="llave3" placeholder="Ingrese la llave">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success"  name="submit3">Desencriptar</button>
    </div>
  </div>
</form>








</body>
</html>