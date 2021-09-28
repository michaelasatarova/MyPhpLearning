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
  <h1 class="mt-4">Assignment 4</h1>

  Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

  <h2>Examples input/output:</h2>
  <ul>
    <li>
      XO("ooxx") => true
    </li>
    <li>XO("xooxx") => false</li>
    <li>XO("ooxXm") => true</li>
    <li>XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true</li>
    <li>XO("zzoo") => false</li>
  </ul>


      <!--CODE-->
      <?php

      function XO($s)
      {
        $lower = strtolower($s);
        return substr_count($lower, 'x') === substr_count($lower, 'o');
      }
      XO('xo')

      ?>

      <br>
      <div>Simple, remove the spaces from the string, then return the resultant string</div>

      <?php

      function no_space($s)
      {
        return str_replace(' ', '', $s);
      }

      no_space('8 j 8   mBliB8g  imjB8B8  jl  B')
      ?>

      <br>
      <div>Given the string representations of two integers, return the string representation of the sum of those integers.</div>
      <h2>For example:</h2>

      <ul>
        <li>sumStrings('1','2') // => '3'</li>
      </ul>

      <?php
            function sum_strings($a, $b) {
              $a = (int)$a;
              $b = (int)$b;
              $c = $a + $b;
              return "$c";
            }
            sum_strings('123', '456');
      ?>

    <div>Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.</div>

    <?php
            function boolToWord($bool){
             /*  or return $boolean ? 'Yes' : 'No'; */
              if($bool == true){
                return "Yes";
              }else{
                return "No";
              }
              }

              boolToword(true);
              boolToword(false);
      ?>

</body>

</html>