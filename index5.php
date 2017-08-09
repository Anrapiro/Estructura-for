<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <br>
    <div class="container">
    <h1 class="alert alert-success">Numero de asteriscos de N° </h1>
    <form class="" action="index5.php" method="post">
      <input class="rounded"type="number" name="numero" value="" min="1" placeholder="digite numero">
      <input  class="btn btn-success rounded-circle"type="submit" name="" value="Calcular" required>
    </form>
    <h4 class="alert alert-info ">
      <?php
      echo $_POST['numero']. " asteriscos: "; 
        for ($i=1; $i <=$_POST['numero']; $i++) {
          echo " * ";
        }
       ?>
     </h4>
     <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
