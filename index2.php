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
    <h1 class="alert alert-success">Numeros impares desde N° hasta N°</h1>
    <form class="" action="index2.php" method="post">
      <input class="rounded"type="number" name="desde" value="" placeholder="Valor inicial" required>
      <input class="rounded"type="number" name="hasta" value="" placeholder="Valor final">
      <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
    </form>
    <h4 class="alert alert-info">
      <?php
       $desde=$_POST['desde'];
       $hasta=$_POST['hasta'];
       if ($desde<$hasta) {
         for ($i=$desde; $i <=$hasta ; $i++) {
           if ($i%2!=0) {
             echo "$i | ";
           }  
         }
       }else {
         echo "Valores incorrectos";
       }
      ?>
     </h4>
     <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
