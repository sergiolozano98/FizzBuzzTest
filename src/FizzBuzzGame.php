<?php

/**
 *
 */
class FizzBuzzGameClass
{
  function __construct()
  {
    echo "test";
    echo "<br>";
  }
  private $init=1;
  private $end=100;
  /*Creamos los funcion que nos calculara si es divisible entre 5,3 o entre los 2*/
  /*La variable $number sera el numero que comprobamos*/
  public function FizzBuzzGamecalc($number)
  {
      /*debemos poner que tambien que no sea divisible por 5 para que en el test no devuelva 2 valores por que si no habra conflicto con divisibles entre 3 y 5*/
      if($number % 3 == 0 && $number % 5 != 0 ){
        return "Fizz";
      }
      /*debemos poner que tambien que no sea divisible por 3 para que en el test no devuelva 2 valores por que si no habra conflicto con divisibles entre 3 y 5*/
      else if($number % 5 == 0 && $number % 3 != 0 ){
        return "Buzz";
      }
      else if($number % 3 == 0 && $number % 5 ==0){
        return "FizzBuzz";
      }
      else {
        return "$number" ;
      }
  }
  /*Creamos una funcion para que nos introduzca los valores en un array*/
  public function FizzBuzzGameArray()
  {
      for ($number=$this->init; $number <= $this->end ; $number++) {
        /*llamamos a la funcion FizzBuzzGamecalc que nos da el valor del numero que le hemos pasado*/
        $lista[] = $this->FizzBuzzGamecalc($number);
      }
      /*Recorremos el array y se lo pasamos al index.php para que nos muestre la lista final */
       foreach ($lista as $key) {
        echo "$key <br>";
      }
  }
}


 ?>
