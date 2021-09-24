<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>

<!--rendering and variables -->
<?php
    $title = "Hello world";
?>

<h1><?php echo $title ?></h1>

<!-- Math -->

<?php
    echo 3+5;

?>
<br>
<!-- Arrays -->

<?php

    $some_array= [3, 5, 1, 'hello world'];
    print_r($some_array);

    echo'<br/>';

    echo $some_array[0];
    echo'<br/>';

  /* associated array */

  $names = ["first_name" => 'Michaela', "last_name" => 'Satarova'];
  echo $names['first_name'];

?>
<br>
<!-- Control structure, if else... -->

<?php

    if(12<10) {
        echo "correct";
    }
    elseif(9<10) {
        echo "correct";
    }
    else{
        echo "incorrect";
    }

    echo'<br/>';

    $number = 24;

switch($number) {
    case 34:
       echo 'this is number 34';
     break;
 case 37:
       echo 'this is number 37';
     break;
 case 39:
       echo 'this is number 39';
     break;
  default:
       echo 'ani jedno neni vyhovuje ';
       break;
}

echo'<br/>';
// while loop

$counter = 0;

while($counter < 10){
   echo  $counter + 1 . " " ."hello";
   echo'<br/>';
   $counter = $counter + 1;
}

//for loop 
for ($counter = 0; $counter<10; $counter++){
    echo $counter . "<br>";
 }

 //for each loop
 $numbers =[345, 375, 676, 2458, 254];

foreach($numbers as $number){
 echo  $number +10 . "<br>";
}

?>


<!-- Fuctions -->
<?php

function name($greeting){
    echo $greeting;
    }
    
 $name= name("Hello from function");
   
?>

</body>
</html>