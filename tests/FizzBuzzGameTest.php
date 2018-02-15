<?php

use PHPUnit\Framework\TestCase;
include_once 'src/FizzBuzzGame.php';

/**
 *
 */
final class FizzBuzzGameTest extends TestCase
{
/*Creacion de testDivisble3*/
  public function testDivisble3()
  {
    $calc = new FizzBuzzGameClass();
    $this->assertEquals(
        "Fizz",
        /*Le pasamos el numero para el test*/
        $calc->FizzBuzzGamecalc(3)
      );
    }
/*Creacion de testDivisble5*/
  public function testDivisble5()
  {
    $calc = new FizzBuzzGameClass();
    $this->assertEquals(
      "Buzz",
      /*Le pasamos el numero para el test*/
      $calc->FizzBuzzGamecalc(5)
    );
  }
/*Creacion de testDivisble3y5*/
  public function testDivisble3y5()
  {
    $calc = new FizzBuzzGameClass();
    $this->assertEquals(
      "FizzBuzz",
      /*Le pasamos el numero para el test*/
      $calc->FizzBuzzGamecalc(15)
    );
  }
}

 ?>
