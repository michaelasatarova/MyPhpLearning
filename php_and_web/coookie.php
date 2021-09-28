<?php
/* set up cookie */
$name ='some_name';
$value = 100;
/* time si in seconds  example of one week expiration */
$expiration = time() + (60*60*24*7);


  setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SET COOKIE</title>
</head>
<body>
    <?php
         /* get cookie */
        if(isset($_COOKIE["SomeName"])){
            $someOne = $_COOKIE["SomeName"];
            echo $someOne;
        }else{
            $someOne ="";
        }

    ?>


</body>
</html>