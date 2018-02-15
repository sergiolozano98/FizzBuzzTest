<?php include 'src/FizzBuzzGame.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
      td{
        border: 1px solid black;
        text-align: center;
      }
      table{
       float: left;
       margin-left: 47%;
      }
      h1{
        text-align: center;
      }
    </style>
    <title></title>
  </head>
  <body>
    <table>
      <h1>Lista FizzBuzz</h1>
        <?php
        $list = new FizzBuzzGameClass();
        /*Llamamos a la funcion FizzBuzzGameArray que nos devuelve la lista con los resultados*/
        $list->FizzBuzzGameArray();
       ?>
    </table>
  </body>
</html>
