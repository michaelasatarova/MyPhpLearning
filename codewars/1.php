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
    <h1 class="mt-4">Assignment 1</h1>

    <h2 class="my-4">You are going to be given a word. Your job is to return the middle character of the word. If the word's length is odd, return the middle character. If the word's length is even, return the middle 2 characters.</h2>

    <h3>#Examples:</h3>
    <ul>
        <li>Kata.getMiddle("test") should return "es"</li>
        <li>Kata.getMiddle("testing") should return "t"</li>
        <li>Kata.getMiddle("middle") should return "dd"</li>
        <li>Kata.getMiddle("A") should return "A"</li>
    </ul>
    <h3>#Input</h3>
    <p>A word (string) of length 0 < str < 1000 (In javascript you may get slightly more than 1000 in some test cases due to an error in the test cases). You do not need to test for this. This is only here to tell you that you do not need to worry about your solution timing out.</p>

    <h3>#Output</h3>
    <p>The middle character(s) of the word represented as a string.</p>


    <!--CODE-->
    <?php
        function getMiddle($text) {
        /* get string length */
        $strlength= strlen($text);
        // define even and odd numbers
        $half_string_even = $strlength / 2 ;
        $half_string_odd = floor($strlength / 2) ;


        if($strlength % 2 == 0 ){
            return $text[$half_string_even - 1].$text[$half_string_even] ;
        }else{
            return $text[$half_string_odd];
        }

        }
        getMiddle("test");
    ?>

</body>
</html>
