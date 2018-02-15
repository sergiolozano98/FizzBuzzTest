<?php
$number=1;
for ($number = $number; $number <= 100; $number++)
{

  if($number % 3 == 0 && $number % 5 != 0 ){
    echo "Fizz <br>";
  }

  else if($number % 5 == 0 && $number % 3 != 0 ){
    echo "Buzz <br>";
  }
  else if($number % 3 == 0 && $number % 5 ==0){
    echo "FizzBuzz <br>";
  }
  else {
    echo "$number <br>";
  }
}
 ?>
