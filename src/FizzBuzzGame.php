<?php

/**
 *
 */
class FizzBuzzGameClass
{
  function __construct()
  {
  }
  /*Creamos los funcion que nos calculara si es divisible entre 5,3 o entre los 2*/
  /*La variable $number sera el numero que comprobamos*/
  public function FizzBuzzGamecalc($number)
  {
    for ($number = $number; $number <= 100; $number++)
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
        return $number;
      }
    }
  }
}


 ?>
