<?php
print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET SUPERGLOBAL</title>
</head>
<body>
    
    <?php
        $id =10;
    ?>
     <!--manipulating urls-->
    <a href="get.php?id=<?php echo $id; ?>"> CLICK </a>


</body>
</html>