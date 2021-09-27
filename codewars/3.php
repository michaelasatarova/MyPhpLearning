<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Code wars</title>
  </head>
  <body class="container bg-light">
    <h1 class="mt-4">Assignment 3</h1>

    Create a function that checks if a number n is divisible by two numbers x AND y. All inputs are positive, non-zero digits.

<h2>Examples:</h2>
  <ol>
    <li>1) n =   3, x = 1, y = 3 =>  true because   3 is divisible by 1 and 3</li>
    <li>2) n =  12, x = 2, y = 6 =>  true because  12 is divisible by 2 and 6</li>
    <li>3) n = 100, x = 5, y = 3 => false because 100 is not divisible by 3</li>
    <li>4) n =  12, x = 7, y = 5 => false because  12 is neither divisible by 7 nor 5</li>
  </ol>


    <!--CODE-->
    <?php
    
    function is_divisible($n, $x, $y) {
      if ($n % $x == 0 && $n % $y == 0) {
        return true;
      } else {
        return false;
      }

    }
    is_divisible(3, 3, 3)

    ?>
<br>

   
</body>
</html>