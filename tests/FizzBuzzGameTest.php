<?php

use PHPUnit\Framework\TestCase;
include_once 'src/FizzBuzzGame.php';

/**
 *
 */
final class FizzBuzzGameTest extends TestCase
{

  public function testDivisble3()
  {
    $calc = new FizzBuzzGameClass();
    $this->assertEquals(
        "Fizz",
        $calc->FizzBuzzGamecalc(3)
      );
    }
  }


 ?>
